@extends('layouts.admin')

@section('content')
<h1>User</h1>

@if (session()->has('msg_delete'))
    <p class="bg-danger">{{session('msg_delete')}}</p>
@endif
<table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Photo</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
      @if ($users)

                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><a href="{{route("user.edit",$user->id)}}">{{$user->name}}</a></td>
                     {{-- Doesn't Work but i like this more than below --}}
                     {{-- <td><img style="width:50px;height:50px;" src="{{$user->photo ? $user->photo->file : "No Img"}}" alt="{{$user->photo->file}}"></td> --}}
                     <td>‌<img style="width:50px;height:50px;" src="{{$user->photo()->exists() ? $user->photo->file : 'https://via.placeholder.com/400x400'}}"></td>
                     {{-- <td>
                            @if($user->photo)
                                <img style="width:50px;height:50px;" src="{{$user->photo->file}}">
                            @else
                                <img style="width:50px;height:50px;" src="https://via.placeholder.com/400x400">
                            @endif
                    </td> --}}
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
                @endforeach

      @endif
    </tbody>
  </table>
@endsection
