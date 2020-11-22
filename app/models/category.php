<?php
namespace app\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{

    protected $table = 'category';

    protected $fillable = ['name','status','created_at','updated_at'];

    public function products()
    {
        return $this->hasMany('App\models\Product');
    }
}
?>
