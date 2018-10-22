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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin',function(){
    return view('admin.index') ;
});

Route::get('post/{id}', 'PostCommentController@Post')->name('post');

Route::group(['middleware' => ['admin']], function () {
    Route::resource('admin/user', 'AdminUsersController');
    Route::resource('admin/post', 'AdminPostsController');
    Route::resource('admin/category', 'AdminCategoryController');
    Route::resource('admin/media', 'AdminMediaController');
    Route::resource('admin/comment', 'PostCommentController');
    Route::resource('admin/comment/replies', 'CommentReplyController');
});
