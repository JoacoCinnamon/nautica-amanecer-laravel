@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">Crear nueva amarra</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('amarras.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="pasillo" class="col-md-4 col-form-label text-md-end">Pasillo</label>
                                <div class="col-md-6">
                                    <input value="{{ old('pasillo') }}" id="pasillo" type="number"
                                        class="@error('pasillo') is-invalid @enderror form-control" name="pasillo"
                                        autocomplete="pasillo">

                                    @error('pasillo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
