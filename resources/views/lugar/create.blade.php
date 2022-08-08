@extends('layouts.app')

@section('content')
    <form action="{{ route('lugar.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="">
            </div>

            <div class="col-md-6">
                <label>{{ 'Responsable' }}</label>
                <input type="text" class="form-control" placeholder="Responsable" name="responsable" required />
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="capacidad">Capacidad</label>
                <input type="text" class="form-control" name="capacidad" id="">
            </div>

            <div class="col-md-6">
                <label>{{ 'edificio' }}</label>
                <select name="edificio" id="" class="form-control">
                    <option  value="D">D</option>
                    <option value="A">A</option>
                    <option selected value="Zeta">Zeta</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
