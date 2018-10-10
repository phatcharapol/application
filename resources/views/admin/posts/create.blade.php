@extends('layouts.admin')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['method'=>'post','action' => ['AdminPostsController@store']]) !!}
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body','Body') !!}
            {!! Form::textarea('body',null,['class'=>'form-control','rows' => 10, 'cols' => 40]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection


