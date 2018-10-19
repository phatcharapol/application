@extends('layouts.admin')
@section('content')
    <h1>Upload Media</h1>
    {!! Form::open(['method'=>'post','action' => ['AdminMediaController@store'],'files'=>true,'class' => 'dropzone']) !!}



    {!! Form::close() !!}
@endsection



