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
Route::get('/trainers', 'TrainersController@index');
Route::get('/classes', 'ClassesController@index');
Route::get('/bloghome', 'BlogController@index');
Route::get('/blogpost', 'BlogpostController@index');
Route::get('/contact', 'ContactController@index');

/*Route::get('/admin', function () {
    return view('Admin.template');
});*/
Route::get('/admin/category', function () {
    return view('Admin.category');
});
Route::get('/admin/createcategory', function () {
    return view('Admin.createcategory');
});
Route::get('/admin/class', function () {
    return view('Admin.class');
});
Route::get('/admin/createclass', function () {
    return view('Admin.createclass');
});
Route::get('/admin/package', function () {
    return view('Admin.package');
});
Route::get('/admin/createpackage', function () {
    return view('Admin.createpackage');
});
Route::get('/admin/trainer', function () {
    return view('Admin.trainer');
});
Route::get('/admin/addtrainer', function () {
    return view('Admin.addtrainer');
});
Route::get('/admin/addpost', function () {
    return view('Admin.addpost');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['role:admin']],function (){
    Route::resource('/admin','AdminController');


});
