@extends('layouts.app')

@section('content')
    <div class="container">
        
        <h1>Edición de Asignatura</h1>

        <form action="{{ route('asignatura.update', $asignatura->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="nombre" class="form-label"><b>Nombre:{{ $asignatura->nombre }}</b></label>
            </div>


            <div>
                <label for="cuatrimestre" class="form-label">Cuatrimestre: {{ $asignatura->cuatrimestre }}</label>
            </div>

            <div>
                <label for="ht" class="form-label">Horas teóricas: {{ $asignatura->ht }}</label>
            </div>

            <div>
                <label for="hp" class="form-label">Horas prácticas: {{ $asignatura->hp }}</label>
            </div>

            <div>
                <label for="htotales" class="form-label">Horas totales: {{ $asignatura->htotales }}</label>
            </div>

            <div>
                <label for="hweek" class="form-label">Horas semanales: {{ $asignatura->htsemana }}</label>

            </div>


            <div>
                <label for="goal" class="form-label">Objetivo: {{ $asignatura->objetivo }}</label>
            </div>


            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>

@endsection
