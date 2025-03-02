<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .accordion-button {
        border-radius: 40px;
          background-color: goldenrod;
          border-color: goldenrod; 
      }
      
footer {
    bottom: 0;
    width: 100%;
}


.footer-logo {
    width: 100%;
    height: auto;
    max-width: 150px; 
}


    </style>
  </head>
  <body>
  <div>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img src="https://cdn-icons-png.flaticon.com/512/523/523676.png" width="50" height="50" alt="Votre texte alternatif ici">
        </a>
        <a class="navbar-brand" href="/retour">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-ticket-detailed-fill" viewBox="0 0 16 16"  fill="currentColor" class="bi bi-trophy-fill" viewBox="0 0 16 16" style="fill: blue;">
            <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zm4 1a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5m0 5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5M4 8a1 1 0 0 0 1 1h6a1 1 0 1 0 0-2H5a1 1 0 0 0-1 1"/>
          </svg>        </a>
          <a class="navbar-brand" href="/calendar">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
              <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z  fill=" class="bi bi-trophy-fill" viewBox="0 0 16 16" style="fill: blue;"/>
              <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
            </svg>          </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Paris 2024</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                   
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3"> 
                        @yield('menu')
                    </ul>
                    
                  
                    <form action="{{ route('authlogout') }}" method="POST" class="mt-auto">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">Déconnexion</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</div>

    <div class="text-center mt-5">
      <br/><br/>

        <img class="mb-4 mx-auto" src="https://media4.giphy.com/media/JO3CYOMFuGH46amYrJ/giphy.gif?cid=6c09b9522y0pepkva3rtuccuk7qcac1rxzewb55hxwf42mi1&ep=v1_internal_gif_by_id&rid=giphy.gif&ct=s" alt="" width="200" height="200">
    </div>
    <div class="container mt-5">
        
      @yield('content')
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <br>
  </body>
  <footer class="bg-dark text-center text-white p-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 mb-3">
                <img src="https://www.macapflag.com/blog/wp-content/uploads/2022/05/Logo-JO-paralympiques-Paris-2024.jpg" alt="Paris 2024" class="img-fluid footer-logo">
            </div>
            <div class="col-md mb-3">
                <ul class="list-unstyled text-small">
                    <h6>PARTENAIRES MONDIAUX</h6>
                    <li><img src="https://img.olympics.com/images/image/private/t_paris_partner/primary/rfsybxkhpnjsngnnts11" alt="Logo partenaire 1" class="footer-logo"></li>
                    <li><img src="https://img.olympics.com/images/image/private/t_paris_partner/primary/fsoydyhoccr2jn0bs54w" alt="Logo partenaire 2" class="footer-logo"></li>
                    <li><img src="https://img.olympics.com/images/image/private/t_paris_partner/primary/jpj5i8h2mjovdvlcen3u" alt="Logo partenaire 3" class="footer-logo"></li>
                </ul>
            </div>
            <div class="col-md mb-3">
                <ul class="list-unstyled text-small">
                    <h6>PARTENAIRES PREMIUM</h6>
                    <li><img src="https://img.olympics.com/images/image/private/t_paris_partner/primary/o0qf8r7arbpckkkg5x9b" alt="Logo partenaire 4" class="footer-logo"></li>
                    <li><img src="https://img.olympics.com/images/image/private/t_paris_partner/primary/tp9fjdt45c9eakmxm61s" alt="Logo partenaire 5" class="footer-logo"></li>
                    <li><img src="https://img.olympics.com/images/image/private/t_paris_partner/primary/gu7vlyabzeaxtwqjzgvc" alt="Logo partenaire 6" class="footer-logo"></li>
                </ul>
            </div>
            <div class="col-md mb-3">
                <ul class="list-unstyled text-small">
                    <h6>SUPPORTEURS OFFICIELS</h6>
                    <li><img src="https://img.olympics.com/images/image/private/t_paris_partner/primary/cernl4cpjjadf9k7camd" alt="Logo partenaire 7" class="footer-logo"></li>
                    <li><img src="https://img.olympics.com/images/image/private/t_paris_partner/primary/m3tdspr1nmqjwdudludy" alt="Logo partenaire 8" class="footer-logo"></li>
                    <li><img src="https://img.olympics.com/images/image/private/t_paris_partner/primary/mzcvnplxxhd8li4owcgp" alt="Logo partenaire 9" class="footer-logo"></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

