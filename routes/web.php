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

Route::get('/', 'HomeController@index');


Route::get('/home','HomeController@home')->name('home');
Route::resource('/class','ClassController');
Route::get('/showclass','ClassController@showclass')->name('tableclass');
Route::resource('/bloghome', 'BlogpostController');
Route::get('/blogposttable', 'BlogpostController@showtable')->name('table');
Route::get('/blogpost/{id}', 'BlogpostController@postid')->name('postid');
Route::get('/category/{id}', 'BlogpostController@categoryid')->name('categoryid');

Route::resource('/contact','ContactController');
Route::resource('/comment','CommentController');
Route::resource('/orderclass','OrderClassController');
Route::post('/getcomments','CommentController@getcomments')->name('getcomments');
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send')->name('sentmail');
Route::resource('/review','ReviewController');
Auth::routes();
Route::get('/freeform','HomeController@freeform')->name('freeform');

Route::resource('/admin/package','PackageController');
Route::resource('/admin/category','CategoryController');
Route::resource('/admin/trainer','TrainersController');
Route::resource('/admin/orderpackage','OrderPackageController');
Route::resource('/record','RecordController');
Route::get('/orclass','RecordController@orclass')->name('onlyclass');
Route::get('/orpackage','RecordController@orpackage')->name('onlypackage' );
Route::post('/bydate','RecordController@bydate')->name('bydate');

Route::get('/ourtrainer','TrainersController@ourtrainer')->name('ourtrainer');

Route::group(['middleware'=>['role:admin']],function (){
    Route::resource('/admin','AdminController');
});
