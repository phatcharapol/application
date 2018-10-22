@extends('layouts.admin')

@section('content')
    <h1>Comment</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            {{-- <th>Post_Id</th>
            <th>is_active</th> --}}
            <th>Author</th>
            <th>Email</th>
            <th>Comment</th>
            <th>Created</th>
            <th>Updated</th>
            <th>View Post</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($comments->all() as $comment)
                  <tr>
                    <td>{{$comment->id}}</td>
                    {{-- <td>{{$comment->post_id}}</td>
                    <td>{{$comment->is_active}}</td> --}}
                    <td>{{$comment->author}}</td>
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->body}}</td>
                    <td>{{$comment->created_at->diffForHumans()}}</td>
                    <td>{{$comment->updated_at->diffForHumans()}}</td>
                    <td><a href="{{route('post',$comment->post->id)}}">View Post</a></td>
                  </tr>
            @endforeach

        </tbody>
      </table>
@endsection
