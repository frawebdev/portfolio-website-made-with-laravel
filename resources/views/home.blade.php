@extends('layouts.app')

@section('content')

<main class="d-flex align-items-center justify-content-around flex-column mt-5">

    <h2>Inserisci un progetto</h2>

    <form action="/progetti" method="POST" enctype="multipart/form-data" style="width: 80%;">

        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control">
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" name="link" class="form-control">
        </div>

        <select name="tags[]" multiple class="form-control">
            
            @foreach ($tags as $tag)

            <option value="{{$tag->id}}">{{$tag->name}}</option>
                
            @endforeach
        
        </select>
        
        <button type="submit" class="btn btn-primary mt-3">Submit</button>

    </form>

    <h2>Inserisci una skill</h2>

    <form action="/skills" method="POST" enctype="multipart/form-data" style="width: 80%;">

        @csrf

        <div class="form-group">
          <label for="icon">Icona</label>
          <input type="file" class="form-control" name="icon">
        </div>
        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" name="name">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>

      </form>

</main>

@endsection
