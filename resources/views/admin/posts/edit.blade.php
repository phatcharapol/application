@extends('layouts.admin')
@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['method'=>'post','action' => ['AdminPostsController@store'],'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',$post->title,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
             {!! Form::label('category_id','Category') !!}
             {!! Form::select('category_id',[$categories],$post->category->name,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
             {!! Form::label('photo','Photo') !!}
             {!! Form::file('photo',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
                {!! Form::label('body','Description') !!}
                {!! Form::textarea('body',$post->body,['class'=>'form-control','rows' => 10, 'cols' => 40]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Post',['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
     {!! Form::open(['method'=>'delete','action' => ['AdminPostsController@destroy', $post->id]]) !!}
                    <div class="form-group">
                         {!! Form::submit('Delete Post',['class'=>'btn btn-danger col-sm-6']) !!}
                    </div>
    {!! Form::close() !!}

    @include('include.form_err')
@endsection


