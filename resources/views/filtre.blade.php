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
    <h1 class="text-center mb-4">Compétitions pour {{ $sport->nom }}</h1>

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <ul class="list-group">
                @foreach ($competitions as $competition)
                    <li class="list-group-item">
                        <div>
                            <h4>{{ $competition->jour }}</h4>
                            <p class="mb-0">{{ $competition->lieu->nom }}</p>
                            <p class="mb-0">De {{ $competition->heure_debut }} à {{ $competition->heure_fin }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="text-center mt-4">
            <a class="btn btn-primary mx-2" href="/">Quiter</a>
            <a class="btn btn-danger mx-2 " href="/calendar">Retour au Calendrier</a>
        </div>

@endsection
