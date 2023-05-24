@extends('layouts.app')

@section('content')
<div class="container">
    <h2>
        {{ $project->title }}
    </h2>
<div>
    {{-- Testo --}}
    <div>    
        {{ $project->text }}
    </div>
    <hr>
    {{-- Tipo --}}
    <div>Type:</div>
    <h4>{{ $project->type?->name ?: 'None' }}</h4>
    <hr>
    {{-- Tecnologie --}}
    <div>Technology:</div>
    <ul>
    @forelse ($project->technologies as $technology)
        <li><h4> {{ $technology->name }}</h4></li>
    @empty
        <li> None </li>
    @endforelse
    </ul>
    {{-- Immagine --}}
    @if($project->image)
    <div>
        <img src="{{ asset('storage/'. $project->image)}}" alt="immagine progetto">
    </div>
    @endif
    {{-- Bottoni --}}
    <div>
        <a class="btn btn-primary" href="{{ route('admin.projects.edit',  $project->slug)}}">Edit</a>
        <a class="btn btn-primary" href="{{ route('admin.projects.index')}}">Torna indietro</a>
    </div>


</div>

</div>
@endsection