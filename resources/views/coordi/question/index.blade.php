@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Crear evaluación + {{ Auth::user()->progedu }}</h1>
            </div>
            <div class="card-body">
                <a href="{{ route('coordinador.create') }}" class="btn btn-primary">Crear Evaluación</a>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Fecha creación</th>
                            <th>Periodo</th>
                            <th>Inicia en</th>
                            <th>Termina en</th>
                            <th>Total</th>
                            <th>Matricula</th>
                            <th>Status</th>
                            <th>Generar</th>
                            <th>Participantes</th>
                            <th>Update</th>
                            <th>Del</th>
                        </thead>
                        <tbody>
                            @forelse ($questions as $question)
                                <tr>
                                    <td>{{ $question->id }}</td>
                                    <td>{{ $question->nombre }}</td>
                                    <td>{{ $question->fecha_creación }}</td>
                                    <td>{{ $question->periodo }}</td>
                                    <td>{{ $question->inicia_en }}</td>
                                    <td>{{ $question->termina_en }}</td>
                                    <td>{{ $question->total }}</td>
                                    <td>{{ $question->Matricula }}</td>
                                    <td>
                                        @switch($question->mostrar)
                                            @case(0)
                                                <small>Off</small>
                                            @break

                                            @case(1)
                                                <small>On</small>
                                            @break

                                            @default
                                                <small>No inscrito</small>
                                        @endswitch
                                    </td>
                                    <td><i class="fa fa-adn fa-lg" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-users fa-lg" aria-hidden="true"></i></td>
                                    <td><i class="fa fa-edit" aria-hidden="true"></i></td>
                                    <td>
                                        <button type="button" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#delAsig{{ $question->id }}">
                                            <i class="fa fa-eraser fa-lg" aria-hidden="true"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" role="dialog" id="delAsig{{ $question->id }}"
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
                                                            <p>¿Deseas eliminar la evaluación {{ $question->nombre }}?
                                                            </p>
                                                        </h3>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cerrar</button>
                                                        <form action="{{ route('coordinador.destroy', $question->id) }}"
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
                        {{ $questions->links() }}
                    </div>
                </div>
            </div>
        </div>
    @endsection
