<div>
    <h1>Lista de asignaturas</h1>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <td>id</td>
            <td>nombre</td>
            <td>objetivo</td>
            <td>carrera_id</td>
            <td>competencia</td>
        </thead>
        <tbody>
            @foreach ($datTable as $materia)
                <tr>
                    <td> {{ $materia->id }}</td>
                    <td>{{ $materia->nombre }}</td>
                    <td>{{ $materia->objetivo }}</td>
                    <td>{{ $materia->carrera->nombre }}</td>
                    <td>{{ $materia->competencia }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
