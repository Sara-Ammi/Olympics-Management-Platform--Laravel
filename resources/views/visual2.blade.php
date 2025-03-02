@extends('template3')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-center">Informations sur l'événement</h4>
            <br>
            <p class="card-text text-center">Le nombre de spectateurs est : <strong>{{$nb}}</strong></p>
            <p class="card-text text-center">Le nombre de place disponible : <strong>{{$dispo}}</strong></p>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center my-4">
    <a class="btn btn-primary" href="/organisation">Quitter</a>
</div>

@endsection

