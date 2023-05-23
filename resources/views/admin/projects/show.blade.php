@extends('layouts.app')

@section('content')
<div class="container">
    <h2>
        {{ $project->title }}
    </h2>
<div>
    <div>    
        {{ $project->text }}
    </div>
    <h4>Type: {{ $project->type?->name ?: 'None' }}</h4>


    @if($project->image)
    <div>
        <img src="{{ asset('storage/'. $project->image)}}" alt="immagine progetto">
    </div>
    @endif

    <div>
        <a class="btn btn-primary" href="{{ route('admin.projects.edit',  $project->slug)}}">Edit</a>
        <a class="btn btn-primary" href="{{ route('admin.projects.index')}}">Torna indietro</a>
    </div>


</div>

</div>
@endsection