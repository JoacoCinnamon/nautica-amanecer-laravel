@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center justify-content-center vh-100 pb-5">
        <div class="text-center">
            <h1 class="display-1 fw-bold text-primary">404</h1>
            <p class="fs-3"> <span class="text-danger">Opps!</span> {{ __('Not Found') }}</p>
            <p class="lead">
                La página que estás buscando no existe.
            </p>
            <a href="{{ route('home') }}" class="btn btn-primary">Volver a inicio</a>
        </div>
    </div>
@endsection
