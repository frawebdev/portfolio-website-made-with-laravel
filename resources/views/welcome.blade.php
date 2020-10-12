@extends('layouts.layout')

@section('content')
  
  <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mandami un messaggio &#128521</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/">
              @csrf
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                  <p>{{$errors->first('email')}}</p>
                </div>
                <div class="form-group">
                  <label for="name">Nome</label>
                  <input type="password" class="form-control" name="name">
                  <p>{{$errors->first('nome')}}</p>
                </div>
                <div class="form-group">
                  <label for="msg">Messaggio</label>
                  <textarea name="msg" rows="3" class="form-control"></textarea>
                  <p>{{$errors->first('messaggio')}}</p>
                </div>
                <button type="submit" class="btn btn-color">Invia</button>
              </form>
        </div>
      </div>
    </div>
  </div>
  
<main class="w-100 d-flex align-items-center justify-content-center flex-column">

    <div class="logo-container position-relative rounded-circle" 
    style=
    "background-image: url('{{asset('assets/images/avatar.jpg')}}');
    background-position: center;
    background-size: cover;
    width: 250px;
    height: 250px;">
    </div>

    <h1 class="font-weight-light m-2 text-white">
        <span class="first-letter">F</span>ra
        <span class="first-letter">W</span>eb
        <span class="first-letter">D</span>ev
    </h1>

    <nav class="d-flex align-items-center justify-content-center flex-row" id="nav">
        <a href="{{route('projects')}}" style="text-decoration: none;" class="m-2">Progetti</a>
        <a href="{{route('skills')}}" style="text-decoration: none;" class="m-2">Skills</a>
        <a href="#" style="text-decoration: none;" class="m-2">Chi Sono</a>
    </nav>

    @include('parts.nav')

</main>
    
@endsection