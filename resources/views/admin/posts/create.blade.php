@extends('layouts.admin')
@section('content')
    @include('include.tiny_editor')
    <h1>Create Post</h1>
    {!! Form::open(['method'=>'post','action' => ['AdminPostsController@store'],'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
             {!! Form::label('category_id','Category') !!}
             {!! Form::select('category_id',[''=>'Choose Category']+$category,'',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
             {!! Form::label('photo','Photo') !!}
             {!! Form::file('photo',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
                {!! Form::label('body','Description') !!}
                {!! Form::textarea('body',null,['class'=>'form-control','rows' => 10, 'cols' => 40]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    @include('include.form_err')
@endsection


