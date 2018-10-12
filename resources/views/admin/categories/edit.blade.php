@extends('layouts.admin')

@section('content')

<h1>Edit Category</h1>
    <div class="row">
        <div class="col-sm-12">
            {!! Form::model($category,['method'=>'patch','action' => ['AdminCategoryController@update',$category->id],'files'=>true]) !!}
                    <div class="form-group">
                        {!! Form::label('name','Category Name') !!}
                        {!! Form::text('name',$category->name,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update Category',['class'=>'btn btn-primary col-sm-6']) !!}
                    </div>

            {!! Form::close() !!}

            {!! Form::open(['method'=>'delete','action' => ['AdminCategoryController@destroy', $category->id]]) !!}
                    <div class="form-group">
                         {!! Form::submit('Delete Category',['class'=>'btn btn-danger col-sm-6']) !!}
                    </div>
            {!! Form::close() !!}

        </div>
    </div>
    <div class="row">
         @include('include.form_err')
    </div>

@endsection
