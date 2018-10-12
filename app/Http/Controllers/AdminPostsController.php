<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post ;
use App\Photo ;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use App\Category;
use App\Http\Requests\EditPostRequest;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all() ;
        return view('admin.posts.index',compact('posts')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category=Category::pluck('name','id')->all() ;
        return view('admin.posts.create',compact('category')) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        //
        $input  = $request->all() ;
        $user = Auth::user() ;
        $input['user_id'] = $user->id ;
        if($file=$request->file('photo'))
        {
            $name=time().$file->getClientOriginalName() ;
            $file->move('image',$name) ;
            $photo = Photo::create(['file'=>$name]) ;
            $input['photo_id'] = $photo->id ;
        }
        $post = new Post() ;
        $post->user_id = $input['user_id'] ;
        $post->category_id = $input['category_id'] ;
        $post->photo_id = $input['photo_id'] ;
        $post->title = $input['title'] ;
        $post->body = $input['body'] ;
        $post->save() ;
        // $user->posts()->create($input) ;
        return redirect('admin/post') ;

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
        $post=Post::findOrFail($id) ;
        $categories=Category::pluck('name','id')->all() ;
        return view('admin.posts.edit',compact('post','categories')) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditPostRequest $request, $id)
    {
        //
        $input=$request->all() ;
        $post=Post::findOrFail($id) ;
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
        Post::findOrFail($id)->delete() ;
        return redirect('admin/posts') ;
    }
}
