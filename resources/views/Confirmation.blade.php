@extends('template')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center">Confirmation de l'achat</h2>
                <p class="card-text text-center">Merci pour votre achat. Votre commande a été confirmée avec succès.</p>
                <p class="card-text text-center">Un email de confirmation vous a été envoyé à l'adresse <span class="text-primary">{{$email}}</span></p>
                <p class="card-text text-center">Nous vous souhaitons une expérience agréable lors de l'événement.</p>
                <div class="text-center">
                    <a href="/fin" class="btn btn-primary">Retour à l'accueil</a>
                </div>
            </div>
        </div>
    </div>
@endsection
