@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" value={{ $area->nombre }} enable />
            </div>

            <label for="nombre">Descripción</label>
            <input type="text" class="form-control" name="descripcion" value={{ $area->descripcion }} />
            <hr>
            <button type="submit" class="btn btn-primary">Actualizar Area</button>
        </form>
    </div>
@endsection
