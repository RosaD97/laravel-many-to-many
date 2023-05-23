@extends('layouts.app')

@section('content')
<div class="container">
    <h2>
        Lista types
    </h2>
    <a href="{{ route('admin.projects.create')}}">New type</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
            <tr>
                <th scope="row">{{ $type->id}}</th>
                <td>{{ $type->name}}</td>
                <td>{{ $type->slug}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.types.show', $type)}}">Show</a>
                    <a class="btn btn-primary" href="{{ route('admin.types.edit',  $type)}}">Edit</a>
                    <form action="{{ route('admin.types.destroy', $type)}}" method="POST">
                      @csrf

                      @method('DELETE')
                      <button class="btn btn-primary">Delete</button>
                    </form>
                </td>

              </tr>
                
            @endforeach
        </tbody>
      </table>

</div>
@endsection