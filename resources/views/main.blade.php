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
    @forelse ($messages as $messageItem)
        <div class="card bg-light mb-1">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-9 col-md-10">
                        <h5 class="card-title">{{ $messageItem->title }}</h5>
                    </div>
                    <div class="col-sm-3 col-md-2 mb-3 ml-auto text-right">
                        <small class="text-muted">{{ $messageItem->created_at->format('d-m-Y') }}</small>
                    </div>
                </div>
                <div class="text-justify">
                    <p class="card-text">{{ $messageItem->message }}</p>
                </div>
                <div class="lead text-right text-muted mt-3">
                    <p style="text-shadow: 1px 1px #AAA;">&mdash; {{ $messageItem->name }}.</p>
                </div>
            </div>
        </div>
    @empty
        <div class="card bg-light mb-1">
            <div class="card-body">
                <h5 class="card-title">No hay entradas.</h5>
                <div class="text-justify">
                    <p class="card-text">Aún no hay entradas registradas, ¿por qué no te animas y escribes la primera entrada <a href="{{ route("create") }}">pulsando aquí</a>?</p>
                </div>
            </div>
        </div>
    @endforelse
@endsection
