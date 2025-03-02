@extends('template3')
@section('menu')
<li class="nav-item">  <a class="nav-link active" aria-current="page"  href="/prog">PROGRAMMER</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page"href="/supp">SUPPRIMER</a></li>
<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/visR">VISUALISER RESERVATIONS</a></li>
<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/visS">VISUALISER SPECTATEURS</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/visS">PLACES DISPONIBLES</a></li>

@endsection
@section('content')
<div class="container">
    <h3 class="text-primary mb-4">Liste des compétitions</h3>
    <form action="/checked2" method="POST">
        @csrf
        @foreach ($comp as $c)
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio"  name ="mod_selected" id="inlineRadio{{$c->id}}" value="{{$c->id}}">
                <label class="form-check-label">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$c->sport->nom}}</h5>
                            <p class="card-text">Jour: {{$c->jour}}</p>
                            <p class="card-text">Heure de début: {{$c->heure_debut}}</p>
                            <p class="card-text">Heure de fin: {{$c->heure_fin}}</p>
                            <p class="card-text">Prix: {{$c->prix}} €</p>
                            <p class="card-text">Lieu: {{$c->lieu->nom}}</p>
                        </div>
                    </div>
                </label>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">modifier</button>
    </form>
</div>
@endsection
