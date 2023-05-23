@extends('layouts.app')

@section('content')
<div class="container">
    <h2>
        {{ $type->name }}
    </h2>
<div>

    @foreach ($type->projects as $project)

    <div><a href="{{ route('admin.projects.show', $project) }}">{{ $project->title }}</a></div>
        
    @endforeach

    <div>
        <a class="btn btn-primary" href="{{ route('admin.types.index')}}">Torna indietro</a>
    </div>


</div>

</div>
@endsection