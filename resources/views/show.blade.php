@extends('layouts.layout')

@section('content')

<main class="pt-5 d-flex align-items-center justify-content-center flex-column mt-5">

  <div class="card mb-3 animate__animated animate__fadeInUp shadow show-card">
    <div class="w-100" 
    style=
    "height: 40vh; 
    background-image: url('{{asset('storage/' . $project->image)}}'); 
    background-size: cover;
    background-position: center;">
  </div>
    <div class="card-body">
      <h1 class="card-title h3">{{$project->name}}</h1>
      <p class="card-text">{{$project->description}}</p>

      <a href="{{$project->link}}" class="btn btn-color">Vai al Progetto</a><br>

      @if(Auth::check())

      <a href="/progetti/{{$project->id}}/edit" class="btn btn-outline-primary mt-2">Modifica</a>
              
      <form action="{{route('project.destroy', $project->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-outline-primary mt-2">Cancella progetto</button>
      </form>

      @endif

      <p class="mt-5">
        @foreach ($project->tags as $tag)

        <a href="/progetti?tag={{$tag->name}}">{{$tag->name}}</a>
            
        @endforeach
      </p>

    </div>
  </div>

    <nav class="d-flex align-items-center justify-content-center flex-row pt-5" id="nav">
      <a href="/" style="text-decoration: none;" class="m-2">Home</a>
        <a href="{{route('projects')}}" style="text-decoration: none;" class="m-2">Progetti</a>
        <a href="{{route('skills')}}" style="text-decoration: none;" class="m-2">Skills</a>
        <a href="#" style="text-decoration: none;" class="m-2">Chi Sono</a>
    </nav>

    @include('parts.nav')

</main>
    
@endsection