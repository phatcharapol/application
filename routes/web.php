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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();


Route::get('post/{slug}', 'PostCommentController@Post')->name('post');

Route::group(['middleware' => ['admin']], function () {

    Route::get('/admin', 'AdminController@index')->name('admin') ;
    Route::resource('admin/user', 'AdminUsersController');
    Route::resource('admin/post', 'AdminPostsController');
    Route::resource('admin/category', 'AdminCategoryController');
    Route::resource('admin/media', 'AdminMediaController');
    Route::resource('admin/comment', 'PostCommentController');
    Route::resource('admin/comment/replies', 'CommentReplyController');

});
