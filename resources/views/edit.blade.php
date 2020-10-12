@extends('layouts.layout')

@section('content')

<main class="d-flex align-items-center justify-content-around flex-column bg-white mt-5">

    <h2>Inserisci un progetto</h2>

    <form action="/progetti/{{$project->id}}" method="POST" enctype="multipart/form-data" style="width: 80%;">

        @csrf

        @method('PUT')
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$project->name}}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" value="{{$project->description}}">
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" value="{{$project->image}}">
        </div>

        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" name="link" class="form-control" value="{{$project->link}}">
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Submit</button>

    </form>

</main>

@endsection