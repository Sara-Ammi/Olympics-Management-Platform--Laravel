@extends('template')
@section('menu')

<li class="nav-item"><a class="nav-link active" aria-current="page" href="/prog">PROGRAMMER</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/supp">SUPPRIMER</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/mod">MODIFIER</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/visR">VISUALISER RESERVATIONS</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/visS">VISUALISER SPECTATEURS</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/visS">PLACES DISPONIBLES</a></li>


@endsection
@section('content')
<div class="container">
    <h1 class="text-center mb-4">Détails de la compétition</h1>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $competition->sport->nom }}</h5>
                    <p class="card-text"><strong>Date:</strong> {{ $competition->jour }}</p>
                    <p class="card-text"><strong>Lieu:</strong> {{ $competition->lieu->nom }}</p>
                    <p class="card-text"><strong>Heure de début:</strong> {{ $competition->heure_debut }}</p>
                    <p class="card-text"><strong>Heure de fin:</strong> {{ $competition->heure_fin }}</p>
                    <p class="card-text"><strong>Prix:</strong> {{ $competition->prix }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center mt-4">
            <a class="btn btn-primary mx-2" href="/">Quiter</a>
            <a class="btn btn-danger mx-2 " href="/calendar">Retour au Calendrier</a>
        </div>
@endsection
