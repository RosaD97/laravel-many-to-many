@extends('layouts.app')

@section('content')
<div class="container">
    <h2>
        Lista projects
    </h2>
    <a href="{{ route('admin.projects.create')}}">Inserisci nuovo project</a>

    @if(session('message'))
    <div class="alert alert-success">
      {{ session('message') }}
    </div>
    @endif

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Text</th>
            <th scope="col">Start date</th>
            <th scope="col">Slug</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <th scope="row">1</th>
                <td>{{ $project->title}}</td>
                <td>{{ $project->text}}</td>
                <td>{{ $project->start_date }}</td>
                <td>{{ $project->slug}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.projects.show', $project->slug)}}">Show</a>
                    <a class="btn btn-primary" href="{{ route('admin.projects.edit',  $project->slug)}}">Edit</a>
                    <form action="{{ route('admin.projects.destroy', $project)}}" method="POST">
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