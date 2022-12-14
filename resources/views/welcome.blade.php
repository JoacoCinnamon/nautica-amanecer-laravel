@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('js/welcome.js') }}" defer></script>
@endpush

@section('content')
    <div class="welcome d-flex align-items-center justify-content-center">
        <div class="text-center">
            <h1 class="text-light">!Bienvenido!</h1>
            <a class="btn btn-lg btn-primary" href="{{ route('register') }}">Comenzar a embarcar</a>
        </div>
    </div>
@endsection
