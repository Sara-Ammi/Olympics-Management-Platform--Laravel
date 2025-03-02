@extends('template3')
@section('menu')

<li class="nav-item"><a class="nav-link active" aria-current="page" href="/prog">PROGRAMMER</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/supp">SUPPRIMER</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/mod">MODIFIER</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/visR">VISUALISER RESERVATIONS</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/visS">VISUALISER SPECTATEURS</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/visS">PLACES DISPONIBLES</a></li>


@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-center">Modification effectuée</h4>
            <p class="card-text text-center">La modification a été effectuée avec succès.</p>
            <p class="card-text text-center">Merci pour votre action.</p>
            <div class="text-center">
                <a href="/organisation" class="btn btn-primary">Retour au tableau de bord</a>
            </div>
        </div>
    </div>
</div>
@endsection
