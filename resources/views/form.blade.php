@extends('layout')

@section('page_title', 'Firmar - Guest Book')

@section('main_content')
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Nombre</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="Anónimo" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail">Correo electrónico</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="Escriba su dirección de correo electrónico" aria-describedby="emailHelp" required>
                <small id="emailHelp" class="form-text text-muted">Tu dirección de correo electrónico no se mostrará publicamente, ni será compartida con terceros.</small>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTitle" class="col-sm-2 col-form-label">Título</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputTitle" placeholder="Escriba un título para su firma" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Mensaje</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="exampleInputEmail1" rows="3" placeholder="Escriba un mensaje" required></textarea>
            </div>
        </div>
        <div class="d-flex">
            <button type="submit" class="btn btn-success ml-auto">Enviar</button>
        </div>
    </form>
@endsection
