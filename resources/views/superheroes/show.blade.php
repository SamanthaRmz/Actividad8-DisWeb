@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center">{{ $superhero->superhero_name }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ $superhero->photo_url }}" alt="{{ $superhero->superhero_name }}" class="img-fluid rounded-circle" style="max-width: 400px;">
                            </div>
                            <div class="col-md-8">
                                <h4 class="card-title">Nombre Real:</h4>
                                <p class="card-text">{{ $superhero->real_name }}</p>
                                <h4 class="card-title">Información Adicional:</h4>
                                <p class="card-text">{{ $superhero->additional_info }}</p>
                                <div class="text-center">
                                    <a href="{{ route('superheroes.edit', $superhero) }}" class="btn btn-primary mr-2">Editar</a>
                                    <form action="{{ route('superheroes.destroy', $superhero) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este superhéroe?')">Eliminar</button>
                                    </form>
                                    <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
