@extends('layout')

@section('page_title', 'Firmar - Guest Book')

@section('main_content')
    <form method="POST" action="{{ route("create") }}">
        <div>
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Se han encontrado errores.
            </div>
        @elseif (!empty($form_valid))
            <div class="alert alert-success" role="alert">
                ¡Mensaje enviado con éxito!
            </div>
        @endif
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Nombre</label>
                <input type="text" class="form-control {{ $errors->first("name") ? 'is-invalid' : '' }}" id="inputName" name="name" placeholder="Escriba su nombre" value="{{ old('name') }}" required>
                <div class="invalid-feedback">
                    Introduzca un nombre o escriba <em>Anónimo</em>.
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail">Correo electrónico</label>
                <input type="email" class="form-control {{ $errors->first("email") ? 'is-invalid' : '' }}" id="inputEmail" name="email" placeholder="Escriba su dirección de correo electrónico" value="{{ old('email') }}" aria-describedby="emailHelp" required>
                <div class="invalid-feedback">
                    Introduzca una dirección de correo válida.
                </div>
                <small id="emailHelp" class="form-text text-muted">Tu dirección de correo electrónico no se mostrará publicamente, ni será compartida con terceros.</small>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTitle" class="col-sm-2 col-form-label">Título</label>
            <div class="col-sm-10">
                <input type="text" class="form-control {{ $errors->first("title") ? 'is-invalid' : '' }}" id="inputTitle" name="title" placeholder="Escriba un título para su firma" value="{{ old('title') }}" required>
                <div class="invalid-feedback">
                    Introduzca un título del mensaje.
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Mensaje</label>
            <div class="col-sm-10">
                <textarea class="form-control {{ $errors->first("message") ? 'is-invalid' : '' }}" id="inputMessage" name="message" rows="3" placeholder="Escriba un mensaje" required>{{ old('message') }}</textarea>
                <div class="invalid-feedback">
                    Introduzca un mensaje de al menos 6 caracteres.
                </div>
            </div>
        </div>
        @csrf
        <div class="d-flex">
            <button type="submit" class="btn btn-success ml-auto">Enviar</button>
        </div>
    </form>
@endsection
