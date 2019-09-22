@extends('layout')

@section('page_title', 'Guest Book')

@section('main_content')
    <div class="jumbotron jumbotron-fluid py-4">
        <div class="container text-center">
            <h1 class="display-4">Libro de visitas.</h1>
            <p class="lead">Deja huella en esta web y firma con tu propio comentario.</p>
            <a class="btn btn-primary btn-lg" href="{{ route("create") }}" role="button">¡Escribir!</a>
        </div>
    </div>
    <div class="card bg-light mb-1">
        <div class="card-header">Últimas entradas</div>
    </div>
    <div class="card bg-light mb-1">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-9 col-md-10">
                    <h5 class="card-title">Lorem ipsum dolor.</h5>
                </div>
                <div class="col-sm-3 col-md-2 mb-3 ml-auto text-right">
                    <small class="text-muted">99/99/9999</small>
                </div>
            </div>
            <div class="text-justify">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est.</p>
            </div>
            <div class="lead text-right text-muted mt-3">
                <p style="text-shadow: 1px 1px #AAA;">&mdash; Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
    <div class="card bg-light mb-1">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-9 col-md-10">
                    <h5 class="card-title">Lorem ipsum dolor.</h5>
                </div>
                <div class="col-sm-3 col-md-2 mb-3 ml-auto text-right">
                    <small class="text-muted">99/99/9999</small>
                </div>
            </div>
            <div class="text-justify">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est.</p>
            </div>
            <div class="lead text-right text-muted mt-3">
                <p style="text-shadow: 1px 1px #AAA;">&mdash; Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
@endsection
