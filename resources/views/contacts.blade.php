<!doctype html>
<html lang="en">

<head>
    <!-- Impostazione del charset e della viewport per la responsività -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contatti - 2Pac Vibes</title>

    <!-- Link per il font Roboto, Montserrat e Poppins tramite Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

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


      <!-- Hero Section Start -->
      <section class="hero-section2 mt-2">
        <div class="container h-100 d-flex justify-content-center align-items-center">
            <div class="text-center text-black">

            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Contenuto dei contatti -->
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Scrivici un messaggio</h2>
                <p>Ti sentiamo. Ogni parola è una poesia e ogni poesia ha il suo valore. Come diceva 2Pac: "Reality is wrong. Dreams are for real." Se hai qualcosa da dire, scrivici!</p>
               
            </div>
            <div class="col-md-6">
                <h2>Contatti</h2>
                <p>Non c'è bisogno di cercare lontano per contattarci. "Keep ya head up" e troverai quello che cerchi.</p>
                <ul>
                    <li><strong>Email:</strong> info@2pacvibes.com</li>
                    <li><strong>Telefono:</strong> +1 800-555-2PAC</li>
                    <li><strong>Indirizzo:</strong> 2Pac Vibes, 123 West Coast, USA</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Inclusione degli script di Bootstrap per funzionalità interattive come il menu mobile -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
