@extends('template')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center">Confirmation de l'annulation</h2>
            <p class="card-text text-center">Votre annulation a été confirmée avec succès.</p>
            <p class="card-text text-center">Nous espérons vous revoir lors de prochains événements.</p>
            <div class="text-center">
                <a href="/fin" class="btn btn-primary">Retour à l'accueil</a>
            </div>
        </div>
    </div>
</div>
@endsection
