@extends('layouts.admin')

@section('content')
    <h1>Post</h1>

    <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>User</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
            <th>View</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts->all() as $post)
                 <tr>
                    <td>{{$post->id}}</td>
                    <td><a href="{{route('post.edit',$post->id)}}">{{$post->user->name}}</a></td>
                    <td>{{$post->category->name}}</td>
                    <td>‌<img style="width:50px;height:50px;" src="{{$post->photo()->exists() ? $post->photo->file : 'https://via.placeholder.com/400x400'}}"></td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                    <td><a href="{{route('post',$post->slug)}}">View Post</a></td>
                  </tr>
            @endforeach
        </tbody>
      </table>
      <div class="row">
          <div class="col-sm-6 col-sm-offset-5">
                {{$posts->links()}}
          </div>
      </div>

@endsection

