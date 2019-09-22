<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/solid.css" integrity="sha384-20Qlvv++Kgw8B9SXDkUX4JrITPco1UXcaB1mkymQFgx8cM9azG2Ig9Sy3khBpWip" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/fontawesome.css" integrity="sha384-8dpIy0am6bmWHK+abUbC1sgkCSD6WstSMjjNB7JVa+rprKurA6xisqNHg6DESJWW" crossorigin="anonymous">

    <title>@yield('page_title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route("index") }}"><i class="fas fa-book-reader mr-1"></i>Guestbook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route("index") }}">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ request()->routeIs('create') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route("create") }}">Escribir visita</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="container my-5">
            @yield('main_content')
        </div>
    </main>
    <footer>
        <div class="container-fluid bg-dark text-muted text-center py-4">
            <p class="my-1"><small>Guestbook is a simple example project for the Laravel framework</small></p>
            <p class="my-1"><small>&copy; Akornsys-rdi.net 2019</small></p>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
