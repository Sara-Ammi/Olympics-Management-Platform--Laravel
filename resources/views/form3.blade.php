@extends('template')
@section('content')
<div class="container">
    <h3 class="text-primary mb-4">Choisir une Compétition</h3>
    <form action="/filled3" method="POST">
    @csrf

    <div class="row">
        <div class="col-md-4">
            <div class="dropdown mb-4">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Football
                </button>
                <ul class="dropdown-menu">
                    @foreach ($comp as $c)
                        @if ($c->sport->nom === 'Football' && $c->prix >= $min && $c->prix <= $max )
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="chosen_selected{{$c->id}}" value="{{$c->id}}">
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
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-md-4">
            <div class="dropdown mb-4">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Natation
                </button>
                <ul class="dropdown-menu">
                    @foreach ($comp as $c)
                        @if ($c->sport->nom === 'Natation' && $c->prix >= $min && $c->prix <= $max)
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="chosen_selected{{$c->id}}" value="{{$c->id}}">
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
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-md-4">
            <div class="dropdown mb-4">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tennis
                </button>
                <ul class="dropdown-menu">
                    @foreach ($comp as $c)
                        @if ($c->sport->nom === 'Tennis'  && $c->prix >= $min && $c->prix <= $max)
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="chosen_selected{{$c->id}}" value="{{$c->id}}">
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
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-5">Selectionner</button>

    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
@endsection
