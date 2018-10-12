@extends('layouts.admin')
@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['method'=>'post','action' => ['AdminCategoryController@store']]) !!}
        <div class="form-group">
            {!! Form::label('name','Category Name') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Category',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    @include('include.form_err')
@endsection


