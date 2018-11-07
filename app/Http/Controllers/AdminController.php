<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Comment;

class AdminController extends Controller
{
    //
    public function index(){

        $cnt_post=Post::count() ;
        $cnt_category=Category::count() ;
        $cnt_comment=Comment::count() ;
        return view('admin.index',compact('cnt_post','cnt_category','cnt_comment')) ;
    }
}
