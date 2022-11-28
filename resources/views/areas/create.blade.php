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
        <svg version="1.1" width="100%" viewbox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
            <rect x="10" y="10" width="100" height="100" fill="#f7b2c1" />
            <circle cx="240" cy="60" r="50" fill="#c1b2f7" stroke="#b2c1f7" stroke width="15" />
            <text x="450" y="70" font-size="12" text-anchor="middle">SVG Text es legible por el
                navegador!</text>
            <g stroke="#b2c1f7">
                <!-- g es para el grupo -->
                <path stroke-width="2" d="M10 170 l590 0" />
                <path stroke-width="4" d="M10 190 l590 0" />
                <path stroke-width="6" d="M10 210 l590 0" />
            </g>
        </svg>


    </div>
@endsection
