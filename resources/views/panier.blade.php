@extends('template2')
@section('content')
    <style>
        .ticket {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .ticket h4 {
            margin-bottom: 10px;
        }
        .ticket p {
            margin-bottom: 5px;
        }
    </style>
    <div class="container mt-5">
        <h1>Votre Panier</h1>
        @foreach ($comp as $competition)
            <div class="ticket p-4">
                <h4>{{$competition->sport->nom}}</h4>
                <p>Date: {{$competition->jour}}</p>
                <p>Heure de début: {{$competition->heure_debut}}</p>
                <p>Lieu: {{$competition->lieu->nom}}</p>
                <hr>
                @foreach ($sp as $key => $spectateur)
                @if ($key < 1)
                <div class="border-bottom mb-3 pb-3">
                        <p><strong>Téléphone:</strong> {{$spectateur->tel}}</p>
                        <p><strong>Email:</strong> {{$spectateur->email}}</p>
                    </div>
                <div class="border-bottom mb-3 pb-3">
                        <p><strong>Nom:</strong> {{$spectateur->nom}}</p>
                        <p><strong>Prénom:</strong> {{$spectateur->prenom}}</p>
                    </div>
                @else 
                    <div class="border-bottom mb-3 pb-3">
                        <p><strong>Nom:</strong> {{$spectateur->nom}}</p>
                        <p><strong>Prénom:</strong> {{$spectateur->prenom}}</p>
                    </div>
                @endif
             @endforeach
            </div>
        @endforeach
        <div class="text-center mt-5">
            <h3>Total: {{$total}} € </h3>
        </div>
        <div class="text-center mt-4">
            <a class="btn btn-primary mx-2" href="/Conf">Confirmer</a>
            <a class="btn btn-danger mx-2 " href="/Ann">Annuler</a>
        </div>

    </div>
@endsection
