@extends('template')
@section('menu')

<li class="nav-item">  <a class="nav-link active" aria-current="page"  href="/retour">Reserver</a></li>
<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/calendar">Calendrier</a></li>
@endsection
@section('content')

<main class="form-signin" style="height: 100vh; margin-top: 50px; margin-bottom: 50px;">
  <form action="{{ route('authlogin') }}" method="post" style="max-width: 400px; margin: auto;">
   
    <h1 class="h3 mb-3 fw-normal">Veuillez vous connecter</h1>

    <div class="form-floating mb-3">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}">
      <label for="floatingInput">Adresse email</label>
    </div>
    @error("email")
    <div class="alert alert-danger">Adresse email incorrecte.</div>
    @enderror

    <div class="form-floating mb-3">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Mot de passe</label>
    </div>
    @error("password")
    <div class="alert alert-danger"> Mot de passe incorrect.</div>
    @enderror

    <button class="btn btn-primary w-100 py-2" type="submit" >Se connecter</button>
    @csrf
  </form>
</main>

@endsection
