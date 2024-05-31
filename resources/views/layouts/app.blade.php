<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=100%, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Gestion des étudiants</title>
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
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