<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/trainers',function (){
   return view('trainers');
});
Route::get('/bloghome',function (){
    return view('bloghome');
});
Route::get('/classes',function (){
    return view('classes');
});
Route::get('/contact',function (){
    return view('contact');
});

Route::resource('/class','ClassController');
Route::get('/showclass','ClassController@showclass')->name('tableclass');
Route::resource('/bloghome', 'BlogpostController');
Route::get('/blogposttable', 'BlogpostController@showtable')->name('table');
Route::get('/blogpost/{id}', 'BlogpostController@postid')->name('postid');
Route::get('/category/{id}', 'BlogpostController@categoryid')->name('categoryid');



Route::resource('/comment','CommentController');
Route::post('/getcomments','CommentController@getcomments')->name('getcomments');

Route::get('/admin/class', function () {
    return view('Admin.class');
});
Route::get('/admin/createclass', function () {
    return view('Admin.createclass');
});
Auth::routes();

Route::get('/index', 'HomeController@index');
Route::resource('/admin/package','PackageController');
Route::resource('/admin/category','CategoryController');
Route::resource('/admin/trainer','TrainersController');
Route::resource('/admin/orderpackage','OrderPackageController');
Route::group(['middleware'=>['role:admin']],function (){
    Route::resource('/admin','AdminController');
});
