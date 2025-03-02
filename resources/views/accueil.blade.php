@extends('template2')

@section('menu')

<li class="nav-item"><a class="nav-link active" aria-current="page" href="/create">S'inscrire</a></li>
<li class="nav-item"><a class="nav-link active" aria-current="page" href="/login">Connexion</a></li>
<li class="nav-item">  <a class="nav-link active" aria-current="page"  href="/retour">Reserver</a></li>
<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/calendar">Calendrier</a></li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://images.pexels.com/photos/720456/pexels-photo-720456.jpeg?auto=compress&cs=tinysrgb&w=1000" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://images.pexels.com/photos/5247206/pexels-photo-5247206.jpeg?auto=compress&cs=tinysrgb&w=1000" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://images.pexels.com/photos/1263349/pexels-photo-1263349.jpeg?auto=compress&cs=tinysrgb&w=1000" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://images.pexels.com/photos/1103829/pexels-photo-1103829.jpeg?auto=compress&cs=tinysrgb&w=1000" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3" style="background-image: url('data:image/jpeg;base64,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'); height: 150px;">
                <div class="card-body">
                    <a class="btn btn-outline-danger text-light" href="/login">Connexion</a>
                </div>
            </div>
            <div class="card mb-3" style="background-image: url('https://th.bing.com/th/id/OIP.3wK_ZTOWTJMQmL7IEJMI_AHaEo?w=299&h=186&c=7&r=0&o=5&dpr=1.5&pid=1.7'); height: 150px;">
                <div class="card-body">
                    <a class="btn btn-outline-success text-light" href="/retour">Reserver</a>
                </div>
            </div>
            <div class="card mb-3" style="background-image: url('https://th.bing.com/th/id/OIP.nn8CQsrncHyC-RasmGfLSQHaEK?w=305&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7'); height: 150px;">
                <div class="card-body">
                    <a class="btn btn-outline-info text-light" href="/calendar">Calendrier</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br></br><br>

<div class="accordion" id="faqAccordion">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Comment acheter des billets pour les Jeux Olympiques de Paris 2024 ?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        Les billets pour les Jeux Olympiques de Paris 2024 sont uniquement en vente sur le site officiel de la billetterie pour les futurs spectateurs du monde entier. Pour accéder à la vente de billets, cliquez <a href="/retour" style="text-decoration: underline;">ici</a>.</div>
    </div>
  </div>
  
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Quelle est la mascotte officielle des Jeux Olympiques de Paris 2024 ?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        La mascotte de Paris 2024 est la Phryge Olympique. La mascotte est inspirée des petits bonnets phrygiens traditionnels dont elle a la forme.

Le nom et le design ont été choisis comme symboles de la liberté et pour représenter des figures allégoriques de la République française.

La Phryge olympique est vêtue de bleu, de blanc et de rouge - les couleurs du célèbre drapeau tricolore français - avec le logo doré de Paris 2024 sur la poitrine.
      </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Quand et où se dérouleront les prochains Jeux Olympiques?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        Les Jeux Olympiques de Paris 2024 se dérouleront en France du 26 juillet au 11 août.
      </div>
    </div>
  </div>
  
<br></br>
</div>

@endsection
