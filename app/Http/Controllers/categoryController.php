<?php
namespace app\Http\Controllers;
use App\Http\Controllers\Controller;
use App\models\category;
use Illuminate\Http\Request;



class categoryController extends Controller
{

    public function index()
    {
        $cats = category::paginate(4); //select * from category
        return view('index',[
            'cats' => $cats
        ]);
    }

    public function edit($id){
        $model = category::find($id);
        return view('edit',['model'=>$model]);
    }

    public function postedit($id, Request $request){
        $request->offsetUnset('_token');
        category::where('id',$id)->update($request->all());
        return redirect()->route('cate');
    }

    public function del($id){
        category:: find($id)->delete();
        return redirect()->back();
    }

    public function add(){
        return view('add');
    }

    public function postadd(Request $request){
        category::create($request->all());
        return redirect()->route('cate');

    }
}
?>
