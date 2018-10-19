@extends('layouts.admin')
@section('content')
    <h1>Edit Post</h1>
    <div class="row">
    {!! Form::model($post,['method'=>'patch','action' => ['AdminPostsController@update',$post->id],'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',$post->title,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
             {!! Form::label('category_id','Category') !!}
             {!! Form::select('category_id',$categories,$post->category->name,['class'=>'form-control']) !!}
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
            {!! Form::submit('Update Post',['class'=>'btn btn-primary col-sm-6']) !!}
        </div>

        {!! Form::close() !!}
        {!! Form::model($post,['method'=>'delete','action' => ['AdminPostsController@destroy', $post->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete Post',['class'=>'btn btn-danger col-sm-6']) !!}
                        </div>
        {!! Form::close() !!}
    </div>
    <div class="row">
        @include('include.form_err')
    </div>
@endsection


