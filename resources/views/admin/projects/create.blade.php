@extends('layouts.app')

@section('content')
<div class="container">
    <h2>
        crea proj
    </h2>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
<div>
    <a href="{{ route('admin.projects.index')}}">torna indietro</a>

    <form action="{{ route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ old('title')}}">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Text</label>
            <textarea type="text" class="form-control" id="text" name="text">{{ old('text')}}</textarea>
          </div>

          <div class="mb-3">
            <label for="type_id" class="form-label">Type</label>
            <select class="form-select" name="type_id" id="type_id">
                <option value="">Select type</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}</option>
                @endforeach
            </select>
        </div>

          <div class="mb-3">
            {{-- <div class="preview">
              <img id="image-preview" @if($project->image) src="{{ asset('storage/'. $project->image)}}" alt="mini preview" @endif>
            </div> --}}
            
            <label for="image" class="form-label">Image</label>
            <input class="form-control" type="file" id="image" name="image">
          </div>


          <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>

</div>
@endsection