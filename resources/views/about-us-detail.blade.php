<!doctype html>
<html lang="en">

<head>
    <!-- Impostazione del charset e della viewport per la responsività -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- Collegamento al file CSS di Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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


    <!-- SCHEDA CANTANTE START-->
    <div class="container-fluid bg-light vh-100 d-flex flex-column align-items-center justify-content-center">
        <div class="row justify-content-center align-items-center w-100">
            <div class="col-12">
                <h1 class="text-center py-5 text-primary">
                    {{$singer['name']}}
                </h1>
            </div>
        </div>

        <div class="row justify-content-center align-items-center w-100">
            <div class="col-12 col-md-6">
                <img src="{{ $singer['url'] }}" class="img-fluid rounded-circle shadow-lg" alt="{{ $singer['name'] }} Photo">
            </div>
        </div>
    </div>




    <div class="container-fluid d-flex align-items-center justify-content-center vh-100">
        <div class="col-12 col-md-6 bg-light p-4 rounded shadow-sm text-center">
            <h2 class="mb-4">{{ $singer['biography'] }}</h2>

            <div class="albums mb-4">
                <!-- Inizio del ciclo principale che scorre attraverso gli album del cantante -->
                @foreach ($singer['albums'] as $albumName => $albumDetails)
                    <div class="album mb-3">
                        <!-- Mostro il nome dell'album e l'anno di uscita dell'album -->
                        <!-- 'albumName' è il nome dell'album, e 'albumDetails['year']' è l'anno di uscita -->
                        <h3 class="text-dark">{{ $albumName }} (Anno: {{ $albumDetails['year'] }})</h3>
                        
                        <!-- Creo una lista non ordinata per le tracce dell'album -->
                        <ul class="list-unstyled">
                            <!-- Ciclo attraverso le tracce dell'album -->
                            @foreach ($albumDetails['tracks'] as $track)
                                <!-- Per ogni traccia, mostro il nome della traccia in un elemento <li> -->
                                <!-- Le tracce sono visualizzate con un testo scuro grazie alla classe text-dark -->
                                <li class="text-dark">{{ $track }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
                <a href="{{route('aboutUs')}}" class="btn btn-outline-secondary mt-4">Go back</a>
            </div>
        </div>
    </div>
    <!-- SCHEDA CANTANTE END-->



    <!-- Inclusione degli script di Bootstrap per funzionalità interattive come il menu mobile -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
