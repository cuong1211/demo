<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = ['id','name','description','created_at','updated_at','category_id'];

    public function categorys()
    {
        return $this->belongsTo('App\models\category','category_id','id');
    }
}
