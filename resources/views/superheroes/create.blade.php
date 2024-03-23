@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Registrar Nuevo Superhéroe</h1>
        <form action="{{ route('superheroes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="real_name">Nombre Verdadero del Superhéroe</label>
                <input type="text" class="form-control" id="real_name" name="real_name" required>
            </div>
            <div class="form-group">
                <label for="superhero_name">Nombre del Superhéroe</label>
                <input type="text" class="form-control" id="superhero_name" name="superhero_name" required>
            </div>
            <div class="form-group">
                <label for="photo_url">Foto del Superhéroe (Agrega la URL)</label>
                <input type="text" class="form-control" id="photo_url" name="photo_url" required>
            </div>
            <div class="form-group">
                <label for="additional_info">Información Adicional</label>
                <textarea class="form-control" id="additional_info" name="additional_info"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Registrar Superhéroe</button>
            <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
