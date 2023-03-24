@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('areas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" />
            </div>

            <label for="nombre">Descripción</label>
            <input type="text" class="form-control" name="descripcion" />

            <div class="form-group">
                <label for="fotografia">Foto</label>
                <input type="file" class="form-control" name="fotografia" id="" accept="image/*" />
                @error('fotografia')
                    <small class="text-danger"> {{ $message }}</small>
                @enderror
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-save-fill" viewBox="0 0 16 16">
                    <path
                        d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z" />
                </svg>Enviar Area</button>
        </form>
    </div>
@endsection
