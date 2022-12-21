@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">
                        <h3 class="card-title text-center text-capitalize">Pasillo {{ $amarra->pasillo }}</h3>
                    </div>
                    <div class="card-body">
                        <h3 class="text-capitalize text-primary">Amarra {{ $amarra->id }}</h3>
                        <h3 class="text-capitalize">{{ $amarra->estado() }}</h3>
                        <h4 class="">@php echo $amarra->deleted_at ? "Baja desde $amarra->deleted_at" : "Alta"; @endphp </h3>
                    </div>
                </div>
                <div class="d-flex justify-content-between px-3 py-2">
                    @if ($previous)
                        <a class="text-decoration-none" href="{{ route('amarras.show', $previous->id) }}">
                            ⬅ {{ __('pagination.previous') }}</a>
                    @endif
                    <p>{{-- Para que se ajusten bien el Next y Previous XD  --}}</p>
                    @if ($next)
                        <a class="text-decoration-none" href="{{ route('amarras.show', $next->id) }}">
                            {{ __('pagination.next') }} ➡</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
