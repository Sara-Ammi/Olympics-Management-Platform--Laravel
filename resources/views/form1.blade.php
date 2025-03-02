@extends('template')
@section('content')
<div class="container">
    <h3 class="text-primary mb-4">Ajouter un spectateur</h3>
    <form action="/filled1" method="POST">
        @csrf
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="mb-3">
            <label for="tel" class="form-label">Téléphone :</label>
            <input type="text" class="form-control" id="tel" name="tel">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail :</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">prix min :</label>
            <input type="text" class="form-control" name="min">
        </div>
        <div class="mb-3">
            <label class="form-label">prix max :</label>
            <input type="text" class="form-control" name="max">
        </div>
        <div class="mb-3">
            <label for="billets" class="form-label">nombre de billets de plus :</label>
            <select class="form-select" name="billets">
                <option selected>Choisir...</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter spectateur</button>
    </form>

</div>
@endsection
