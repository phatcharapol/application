@extends('layouts.admin')
@section('content')
    <h1>All Media</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>

             @foreach ($photos->all() as $photo)
             <tr>
                <td>{{$photo->id}}</td>
                <td><img style="width:50px;height:50px;" src="{{$photo->file}}" alt="{{$photo->file}}"></td>
                {{-- <td><img style="width:50px;height:50px;" src="{{$photo->file()->exists() ? $photo->file : 'https://via.placeholder.com/400x400'}}" alt="{{$photo->file}}"></td> --}}
                <td>{{$photo->created_at}}</td>
                <td>{{$photo->updated_at}}</td>
                <td>{!! Form::model($photo,['method'=>'delete','action' => ['AdminMediaController@destroy', $photo->id]]) !!}
                    <div class="form-group">
                         {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                    </div>
                {!! Form::close() !!}</td>
             </tr>
             @endforeach

        </tbody>
      </table>
@endsection


