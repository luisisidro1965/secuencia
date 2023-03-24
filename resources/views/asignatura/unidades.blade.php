@extends('layouts.app')

@section('content')
    <div class="container d-flex">
        <div class="card" style="width:24rem;">
            <h1>Edición de Asignatura</h1>
            <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $asignatura->nombre }}</h5>
                <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                <p class="card-text">{{ $asignatura->objetivo }}
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
            </div>
        </div>

        <div class="card" style="width:72rem;">
            <h1>Unidades</h1>
            <div class="card-body">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h1>Lista de asignaturas</h1>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('asignatura.create') }}" class="btn btn-primary">Crear Asignatura</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Objetivo</th>
                                        <th>Tarea integradora</th>
                                        <th>HT</th>
                                        <th>HP</th>
                                        <th>Fecha entrega</th>

                                        <th>Material didactico</th>
                                        <th>Instrumento de evaluación</th>
                                        <th>Herramientas didacticas</th>

                                        <th>Update</th>
                                        <th>Del</th>
                                    </thead>
                                    <tbody>
                                        @forelse ($unidades as $unidad)
                                            <tr>
                                                <td>{{ $unidad->id }}</td>
                                                <td>{{ $unidad->nombre }}</td>
                                                <td>Hola </td>
                                                <td>{{ $unidad->ht }}</td>
                                                <td>{{ $unidad->hp }}</td>
                                                <td>{{ $unidad->htotales }}</td>
                                                <td>{{ $unidad->htsemana }}</td>
                                                <td>{{ $unidad->objetivo }}</td>
                                                <td>{{ $unidad->asignatura_id }}</td>
                                                <td><a href="{{ url('asignatura/unidad', $unidad->id) }}"
                                                        class="btn btn-primary">Unidades</a></td>
                                                <td>
                                                    <a href="http://" class="btn btn-warning">Update</a>
                                                </td>

                                                <td>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#delAsig{{ $unidad->id }}">
                                                        Del
                                                    </button>
                                                </td>
                                            </tr>
                                        @empty
                                            <p>No se encontraron</p>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
