@extends('template')
@section('content')
<div class="container">
    <h3 class="text-primary mb-4">modofier la compétition</h3>
    <form action="/checked3" method="POST">
        @csrf
        <div class="mb-3">
            <label for="jour" class="form-label">Jour :</label>
            <input type="date" class="form-control" id="jour" name="newjour" min="2024-07-24" max="2024-08-11">
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="heure_debut" class="form-label">Heure de début :</label>
                <input type="text" class="form-control" id="heure_debut" name="newheure_debut">
            </div>
            <div class="col-md-6 mb-3">
                <label for="heure_fin" class="form-label">Heure de fin :</label>
                <input type="text" class="form-control" id="heure_fin" name="newheure_fin">
            </div>
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix :</label>
            <input type="text" class="form-control" id="prix" name="newprix">
        </div>
        <div class="mb-3">
            <label for="lieu" class="form-label">Lieu :</label>
            <select class="form-select" name="newlieu">
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
