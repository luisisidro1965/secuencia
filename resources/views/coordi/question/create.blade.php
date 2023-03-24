@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Questions</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('coordinador.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-8 form-group">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre"
                                    name="nombre" value="{{ old('nombre') }}">
                                @error('nombre')
                                    <small><b>{{ $message }}</b></small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <label for="ht" class="form-label">Periodo</label>
                            <input type="text" class="form-control" name="periodo" value="{{ old('periodo') }}">
                            @error('periodo')
                                <small><b>{{ $message }}</b></small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="fecha_creación" class="form-label">Fecha de creación</label>
                            <input type="date" class="form-control" name="fecha_creación"
                                value="{{ old('fecha_creación') }}">
                            @error('fecha_creación')
                                <small><b>{{ $message }}</b></small>
                            @enderror
                        </div>
                        <div class="col mb-3">
                            <label for="inicia_en" class="form-label">Inicia en</label>
                            <input type="date" class="form-control" name="inicia_en" value="{{ old('inicia_en') }}">
                            @error('inicia_en')
                                <small><b>{{ $message }}</b></small>
                            @enderror
                        </div>

                        <div class="col mb-3">
                            <label for="termina_en" class="form-label">Termina en</label>
                            <input type="date" class="form-control" name="termina_en" value="{{ old('termina_en') }}">
                            @error('termina_en')
                                <small><b>{{ $message }}</b></small>
                            @enderror
                        </div>
                    </div>


                    <div class="row">
                        <div class="col mb-3">
                            <label for="progedu" class="form-label">Programa educativo</label>
                            <input type="text" class="form-control" name="progedu" value="{{ old('progedu') }}">
                            @error('progedu')
                                <small><b>{{ $message }}</b></small>
                            @enderror
                        </div>

                        <div class="col mb-3">
                            <label for="Matricula" class="form-label">Matricula</label>
                            <input type="number" class="form-control" name="Matricula" value="{{ old('Matricula') }}">
                            @error('Matricula')
                                <small><b>{{ $message }}</b></small>
                            @enderror
                        </div>

                        <div class="col mb-3">
                            <label for="total" class="form-label">Total</label>
                            <input type="number" class="form-control" name="total" value="{{ old('total') }}">
                            @error('total')
                                <small><b>{{ $message }}</b></small>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
            <div class="card-footer">

            </div>
        </div>



    </div>
@endsection
