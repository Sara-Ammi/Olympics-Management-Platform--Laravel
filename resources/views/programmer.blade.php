@extends('template3')
@section('menu')

<li class="nav-item"><a class="nav-link active" aria-current="page"href="/supp">SUPPRIMER</a></li>
<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/mod">MODIFIER</a></li>
<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/visR">VISUALISER RESERVATIONS</a></li>
<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/visS">VISUALISER SPECTATEURS</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/visS">PLACES DISPONIBLES</a></li>
@endsection
@section('content')
<div class="container">
    <h3 class="text-primary mb-4">Créer une compétition</h3>
    <form action="/ajouter" method="POST">
        @csrf
        <div class="mb-3">
            <label for="jour" class="form-label">Jour :</label>
            <input type="date" class="form-control" id="jour" name="jour" min="2024-07-24" max="2024-08-11">
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="heure_debut" class="form-label">Heure de début :</label>
                <input type="text" class="form-control" id="heure_debut" name="heure_debut">
            </div>
            <div class="col-md-6 mb-3">
                <label for="heure_fin" class="form-label">Heure de fin :</label>
                <input type="text" class="form-control" id="heure_fin" name="heure_fin">
            </div>
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix :</label>
            <input type="text" class="form-control" id="prix" name="prix">
        </div>
        <div class="mb-3">
            <label for="sport" class="form-label">Sport :</label>
            <select class="form-select" name="sport">
                <option selected>Choisir...</option>
                <option value="1">Football</option>
                <option value="2">Natation</option>
                <option value="3">Tennis</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="lieu" class="form-label">Lieu :</label>
            <select class="form-select" name="lieu">
                <option selected>Choisir...</option>
                <option value="1">Stade de France</option>
                <option value="2">Piscine Olympique</option>
                <option value="3">Stade Roland-Garros</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
