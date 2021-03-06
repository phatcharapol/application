<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post ;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use App\CommentReply;
use App\Category;


class PostCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments=Comment::all() ;
        return view('admin.comment.index',compact('comments')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=Auth::user() ;
        //
        $data=['post_id'=>$request->post_id,
                'is_active'=>$user->is_active,
                'author'=>$user->name,
                'email'=>$user->email,
                'body'=>$request->body
        ] ;
        Comment::create($data);
        $request->session()->flash('comment_message', 'Your Message has been Submited');
        return redirect()->back() ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function Post($slug){
        $post=Post::where('slug',$slug)
                    ->firstOrFail();
        $comments=Comment::find($post->id) ;
        $categories=Category::all() ;
        return view('front.post',compact('post','comments','categories')) ;
    }
}
