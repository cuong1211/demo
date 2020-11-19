<?php
namespace app\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{

    protected $table = 'category';

    protected $fillable = ['name','status'];
}
?>
