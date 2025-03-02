@extends('template3')

@section('content')
<div class="container mt-4">
    @for ($i = 0; $i < $j; $i++)
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="card-title mb-0">{{ $c[$i]->sport->nom }}</h5>
        </div>
        <div class="card-body">
            <p class="card-text">Jour: {{ $c[$i]->jour }}</p>
            <p class="card-text">Heure de début: {{ $c[$i]->heure_debut }}</p>
            <p class="card-text">Heure de fin: {{ $c[$i]->heure_fin }}</p>
            <p class="card-text">Prix: {{ $c[$i]->prix }} €</p>
            <p class="card-text">Lieu: {{ $c[$i]->lieu->nom }}</p>
        </div>
        <div class="card-footer">
            <h6 class="card-title">Les spectateurs qui ont réservé :</h6>
            <ul class="list-group">
                @foreach ($sp[$i] as $s)
                <li class="list-group-item">
                    <div>nom : {{ $s->nom }}</div>
                    <div>prenom : {{ $s->prenom }}</div>
                    <div>telephone : {{ $s->tel }}</div>
                    <div>email : {{ $s->email }}</div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endfor
    <div class="text-center">
                <a href="/organisation" class="btn btn-primary">Retour au tableau de bord</a>
            </div>
        </div>
</div>
@endsection
