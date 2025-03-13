<!doctype html>
<html lang="en">

<head>
    <!-- Impostazione del charset e della viewport per la responsività -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- Link per il font Roboto, Montserrat e Poppins tramite Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Collegamento al file CSS di Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Collegamento al file di stile personalizzato (style.css) -->
    <link rel="stylesheet" href="/style.css"> 
</head>

<body>

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Pulsante per il menu mobile (toggle) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu di navigazione che appare quando la navbar è espansa -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Link alla Home page -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('homepage') }}">Home</a>
                    </li>
                    <!-- Link alla pagina "Chi siamo" -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('aboutUs') }}">Chi siamo</a>
                    </li>
                    <!-- Link alla pagina contatti -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('contacts') }}">Contatti</a>
                    </li>
                    <!-- Link alla pagina songs -->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('song.list') }}">Canzoni</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->




    <section class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card" style="width: 18rem;">
        <!-- Mostro l'immagine della canzone -->
        <img src="{{ $song['img'] }}" class="card-img-top" alt="{{ $song['title'] }}">
        <div class="card-body text-center">
            <!-- Mostro il titolo della canzone -->
            <h5 class="card-title">{{ $song['title'] }}</h5>
            <!-- Mostro l'anno di uscita della canzone -->
            <p class="card-text">Anno: {{ $song['year'] }}</p>
            <!-- Mostro il genere della canzone -->
            <p class="card-text">Genere: {{ $song['genres'] }}</p>
            <!-- Pulsante "Go Back" con stile -->
            <a href="{{ route('song.list') }}" class="btn btn-dark text-white w-50">Go Back</a>
        </div>
    </div>
</section>


    <!-- Inclusione degli script di Bootstrap per funzionalità interattive come il menu mobile -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>