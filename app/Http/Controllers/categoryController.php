<?php
namespace app\Http\Controllers;
use App\Http\Controllers\Controller;
use App\models\category;
use illuminate\http\Request;



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
        dd($model);
        return view('edit');
    }

    public function del($id){
        category:: find($id)->delete();
        return redirect()->back();
    }

    public function add(){
        return view('add');
    }

    public function postadd(request $request){

        category::create($request->all());
        return redirect()->route('cate');

    }
}
?>
