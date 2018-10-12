@extends('layouts.admin')

@section('content')
    <h1>Category</h1>

    <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Category Name</th>
            <th>Created</th>
            <th>Updated</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories->all() as $category)
                 <tr>
                    <td>{{$category->id}}</td>
                    <td><a href="{{route('category.edit',$category->id)}}">{{$category->name}}</a></td>
                    <td>{{$category->created_at->diffForHumans()}}</td>
                    <td>{{$category->updated_at->diffForHumans()}}</td>
                  </tr>
            @endforeach
        </tbody>
      </table>
@endsection

