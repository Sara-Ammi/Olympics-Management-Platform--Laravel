@extends('template')

@section('content')



<form action="{{ route('authcreateLogin') }}" method="post" style="max-width: 400px; margin: auto;">
  <h1 class="h3 mb-3 fw-normal">Veuillez vous inscrire</h1>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="name" id="floatingName" placeholder="Name">
    <label for="floatingName">Nom</label>
  </div>

  <div class="form-floating mb-3">
    <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="name@example.com">
    <label for="floatingEmail">Adresse email</label>
  </div>

  <div class="form-floating mb-3">
    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Mot de passe</label>
  </div>

  <button class="btn btn-primary w-100 py-2" type="submit">Envoyer</button>
  @csrf
</form>

@endsection
