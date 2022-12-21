@extends('layouts.app')

@section('content')
    <div class="container pt-4 p-3">
        <div class="row">
            @forelse ($amarras as $amarra)
                <div class="col-md-2 mb-3">
                    <div class="card text-center mb-3" style="max-width: 18rem;">
                        <div class="card-header bg-light text-capitalize">Pasillo {{ $amarra->pasillo }}</div>
                        <div class="card-body bg-white">
                            <a class="text-decoration-none" href="{{ route('amarras.show', $amarra->id) }}">
                                <h5 class="card-title text-capitalize">Amarra {{ $amarra->id }}</h3>
                            </a>
                            <p class="m-2">{{ $amarra->estado() }}</p>
                            <p class="m-2">{{ $amarra->borrado() }}</p>
                            <a href="{{ route('amarras.edit', $amarra->id) }}" class="btn btn-secondary mb-2">Editar
                                Amarra</a>
                            <form action="{{ route('amarras.destroy', $amarra->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                @if (is_null($amarra->deleted_at))
                                    <button type="submit" class="btn btn-danger mb-2">Borrar Amarra</button>
                                @else
                                    <button type="submit" class="btn btn-info mb-2">Restablecer Amarra</button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-4 mx-auto">
                    <div class="card card-body text-center">
                        <p>No hay amarras aún</p>
                        <a href="{{ route('amarras.create') }}">Agregar una!</a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
