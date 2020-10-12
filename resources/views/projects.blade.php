@extends('layouts.layout')

@section('content')

<main>

<div class="container text-center p-3 mt-5">

@foreach ($tags as $tag)

<a href="/progetti?tag={{$tag->name}}" class="badge badge-color" style="font-size: 12px;">{{$tag->name}}</a>
    
@endforeach

</div>

<div class="card-columns pt-5 pb-5 container" >

    @foreach ($projects as $project)

    <div class="card shadow animate__animated animate__fadeInUp" >
      <a href="/progetti?tag={{$tag->name}}">
        <img src="{{asset('storage/' . $project->image)}}" class="card-img-top" alt="{{$project->image}}">
      </a>
        <div class="card-body">
          <h5 class="card-title">{{$project->name}}</h5>
          <a href="{{route('show', $project->id)}}" class="btn btn-color">Leggi di più</a>
          <p class="my-3">
            @foreach ($project->tags as $tag)

            <a href="/progetti?tag={{$tag->name}}">{{$tag->name}}</a>
                
            @endforeach
          </p>
        </div>
    </div>
        
    @endforeach
  
</div>

<nav class="d-flex align-items-center justify-content-center flex-row" id="nav">
  <a href="/" style="text-decoration: none;" class="m-2">Home</a>
  <a href="{{route('projects')}}" style="text-decoration: none;" class="m-2">Progetti</a>
  <a href="{{route('skills')}}" style="text-decoration: none;" class="m-2">Skills</a>
  <a href="#" style="text-decoration: none;" class="m-2">Chi Sono</a>
</nav>

@include('parts.nav')

</main>
    
@endsection