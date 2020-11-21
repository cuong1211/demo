<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('welcome');
})->name('home');

Route::get('category','categoryController@index')->name('cate');

//chinh sua du lieu
Route::get('category-edit/{id}', 'categoryController@edit')->name('cate-edit');
Route::post('category-edit/{id}', 'categoryController@postedit')->name('cate-edit');

//xoa du lieu
Route::get('category-del/{id}','categoryController@del')->name('cate-del');

//them du lieu
Route::get('category-add', 'categoryController@add')->name('cate-add');
Route::post('category-add', 'categoryController@postadd')->name('cate-add');
