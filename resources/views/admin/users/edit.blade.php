@extends('layouts.admin')

@section('content')

<h1>Edit User</h1>
    <div class="row">
        <div class="col-sm-3">
            @if($user->photo)
                <img class="img-responsive" src="{{$user->photo->file}}">
            @else
                <img class="img-responsive" src="https://via.placeholder.com/400x400">
            @endif
        </div>
        <div class="col-sm-9">
            {!! Form::model($user,['method'=>'patch','action' => ['AdminUsersController@update',$user->id],'files'=>true]) !!}
                    <div class="form-group">
                        {!! Form::label('name','Name') !!}
                        {!! Form::text('name',$user->name,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email','Email') !!}
                        {!! Form::text('email',$user->email,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('role_id','Role') !!}
                        {!! Form::select('role_id',$roles,$user->role_id,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('is_active','Status') !!}
                        {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),$user->is_active,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password','Password') !!}
                        {!! Form::password('password',['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::file('file',['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update User',['class'=>'btn btn-primary col-sm-6']) !!}
                    </div>

            {!! Form::close() !!}

            {!! Form::open(['method'=>'delete','action' => ['AdminUsersController@destroy', $user->id]]) !!}
                    <div class="form-group">
                         {!! Form::submit('Delete User',['class'=>'btn btn-danger col-sm-6']) !!}
                    </div>
            {!! Form::close() !!}

        </div>
    </div>
    <div class="row">
         @include('include.form_err')
    </div>

@endsection
