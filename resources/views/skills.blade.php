@extends('layouts.layout')

@section('content')

<main>

  <div class="card-deck">

  </div>

<div class="card-columns container pt-5 pb-5">

    @foreach ($skills as $skill)

    <div class="card shadow animate__animated animate__fadeInUp" style="display: inline-block">
      <a href="/progetti?tag={{$skill->name}}">
        <img src="{{asset('storage/' . $skill->icon)}}" class="card-img-top" alt="{{$skill->icon}}">
      </a>
        <div class="card-body">
          <a href="/progetti?tag={{$skill->name}}" class="card-title">{{$skill->name}}</a>
        </div>
    </div>
        
    @endforeach
  
</div>

<nav class="d-flex align-items-center justify-content-center flex-row" id="nav">
  <a href="/" style="text-decoration: none;" class="m-2">Home</a>
  <a href="{{route('projects')}}" style="text-decoration: none;" class="m-2">Progetti</a>
  <a href="#" style="text-decoration: none;" class="m-2">Chi Sono</a>
</nav>

@include('parts.nav')

</main>
    
@endsection