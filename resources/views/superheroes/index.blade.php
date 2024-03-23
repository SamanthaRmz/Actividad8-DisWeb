@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Superhéroes</h1>

        <div class="row">
            <div class="col-md-12 mb-4">
                <a href="{{ route('superheroes.create') }}" class="btn btn-success">Registrar Nuevo Superhéroe</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Superhéroes Registrados</h2>
                <ul class="list-group">
                    @foreach($superheroes as $superhero)
                        <li class="list-group-item">
                            <span>{{ $superhero->real_name }} ({{ $superhero->superhero_name }})</span>
                            <div class="float-right">
                                <a href="{{ route('superheroes.show', $superhero) }}" class="btn btn-info btn-sm">Ver Detalles</a>
                                <a href="{{ route('superheroes.edit', $superhero) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('superheroes.destroy', $superhero) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este superhéroe?')">Eliminar</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
