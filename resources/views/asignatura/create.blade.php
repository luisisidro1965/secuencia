@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Asignaturas</h1>

        <form action="{{ route('asignatura.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre"
                        value="{{ old('nombre') }}">
                    @error('nombre')
                        <small><b>{{ $message }}</b></small>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="cuatrimestre" class="form-label">Cuatrimestre</label>
                <input type="number" class="form-control" placeholder="Cuatrimestre" name="cuatrimestre"
                    value="{{ old('cuatrimestre') }}">
                @error('cuatrimestre')
                    <small><b>{{ $message }}</b></small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ht" class="form-label">Horas teóricas</label>
                <input type="number" class="form-control" name="ht" value="{{ old('ht') }}">
                @error('ht')
                    <small><b>{{ $message }}</b></small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="hp" class="form-label">Horas prácticas</label>
                <input type="number" class="form-control" name="hp" value="{{ old('hp') }}">
                @error('hp')
                    <small><b>{{ $message }}</b></small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="htotales" class="form-label">Horas totales</label>
                <input type="number" class="form-control" name="htotales" value="{{ old('htotales') }}">
                @error('htotales')
                    <small><b>{{ $message }}</b></small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="hweek" class="form-label">Horas semanales</label>
                <input type="number" class="form-control" name="hweek" value="{{ old('hweek') }}">
                @error('hweek')
                    <small><b>{{ $message }}</b></small>
                @enderror
            </div>

            <div class="form-group">
                <div class="mb-3">
                    <label for="goal" class="form-label">Objetivo</label>
                    <input type="text" class="form-control" placeholder="Objetivo" name="goal"
                        value="{{ old('goal') }}">
                    @error('goal')
                        <small><b>{{ $message }}</b></small>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="mb-3">
                    <select name="categoria" class="form-control">
                        @foreach ($categorias as $catego)
                            <option value="{{ $catego->id }}" @selected(old('catego->nombre') == $catego->nombre)>
                                {{ $catego->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
@endsection
