@extends('template')
@section('menu')

<li class="nav-item"><a class="nav-link active" aria-current="page" href="/login">Connexion</a></li>
<li class="nav-item">  <a class="nav-link active" aria-current="page"  href="/retour">Reserver</a></li>

@endsection
@section('content')

<div class="container">
    <h1>Calendrier des compétitions</h1><br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Date/Sports</th>
                @foreach ($sports as $sport) 
                    <th>
                        <a href="{{ route('filtre', ['sport' => $sport->nom]) }}">
                            {{ $sport->nom }}
                        </a>
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
        @foreach ($dates as $date) 
            <tr>
                <td>
                    <a href="{{ route('filtredate', ['date' => $date]) }}">
                        {{ $date }}
                    </a>
                </td> 
                @foreach ($sports as $sport)
                    <td>
                        @if ($calendar[$sport->nom][$date] == 'x')
                            <a href="{{ route('filtrex', ['sport' => $sport->nom, 'date' => $date]) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy-fill" viewBox="0 0 16 16" style="fill: goldenrod;">
                                  <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935"/>
                                </svg>
                            </a>
                        @else
                            {{ $calendar[$sport->nom][$date] }}
                        @endif
                    </td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="text-center mt-4">
            <a class="btn btn-primary mx-2" href="/">Quiter</a>
        </div>
@endsection
