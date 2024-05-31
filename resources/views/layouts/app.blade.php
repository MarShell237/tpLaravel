<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=100%, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Gestion des étudiants</title>
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body class="d-flex h-100 bg-dark">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column"id="main">
            <header class="mb-auto">
                <div class="px-3 py-2 bg-dark text-white">
                    <div class="container">
                        <div class="d-flex flex-wrap align-items-center justifycontent-center justify-content-lg-start">
                            <a href="/" class="d-flex align-items-center my-2 my-lg-0 melg-auto text-white text-decoration-none">
                                <svg class="bi me-2" width="40" height="32"role="img" aria-label="Bootstrap">
                                    <use xlink:href="#bootstrap" />
                                </svg>
                            </a>
                            @include('layouts.menu')
                        </div>
                    </div>
                </div>
            </header>
        @yield('content')
        </div>
    </body>
</html>