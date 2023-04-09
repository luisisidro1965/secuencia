@extends('layouts.app')

@section('content')
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
                            <th>Cuatrimestre</th>
                            <th>HT</th>
                            <th>HP</th>
                            <th>Horas totales</th>
                            <th>Horas Semanales</th>
                            <th>Objetivo</th>
                            <th>Update</th>
                            <th>Del</th>
                        </thead>
                        <tbody>
                            @forelse ($asignaturas as $asignatura)
                                <tr>
                                    <td>{{ $asignatura->id }}</td>
                                    <td>{{ $asignatura->nombre }}</td>
                                    <td>
                                        @switch($asignatura->cuatrimestre)
                                            @case(0)
                                                <small>Principiante</small>
                                            @break

                                            @case(1)
                                                <img src="{{ asset('images/uno.png') }}" alt="" srcset="">
                                            @break

                                            @case(2)
                                                <img src="{{ asset('images/dos.jpg') }}" alt="" srcset="">
                                            @break

                                            @default
                                                <small>No inscrito</small>
                                        @endswitch
                                    </td>
                                    <td>{{ $asignatura->hp }}</td>
                                    <td>{{ $asignatura->htotales }}</td>
                                    <td>{{ $asignatura->htsemana }}</td>
                                    <td>{{ $asignatura->objetivo }}</td>
                                    <td>{{ $asignatura->ht }}</td>
                                    <td><a href="{{ url('asignatura/unidad', $asignatura->id) }}" class="btn btn-primary">Unidades</a></td>
                                    <td>
                                        <a href="http://" class="btn btn-warning">Update</a>
                                    </td>

                                    <td>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#delAsig{{ $asignatura->id }}">
                                            Del
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" role="dialog" id="delAsig{{ $asignatura->id }}"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Borrar asignatura
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h3>
                                                            <p>¿Deseas eliminar la asignatura {{ $asignatura->nombre }}?
                                                            </p>
                                                        </h3>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cerrar</button>
                                                        <form action="{{ route('asignatura.destroy', $asignatura->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                @empty
                                    <p>No se encontraron</p>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $asignaturas->links() }}
                    </div>
                </div>
            </div>
        </div>
    @endsection
