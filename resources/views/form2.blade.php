@extends('template')
@section('content')
<div class="container">
    <h3 class="text-primary mb-4">Ajouter un spectateur</h3>
    <form action="/filled2" method="POST">
        @csrf
        @for ($i = 1; $i < $billets + 1 ; $i++)
        <h5> spectateur {{$i}} : </h5>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom{{$i}}">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom{{$i}}">
        </div>
    @endfor
        <button type="submit" class="btn btn-primary">Ajouter spectateur</button>
    </form>
</div>
@endsection
