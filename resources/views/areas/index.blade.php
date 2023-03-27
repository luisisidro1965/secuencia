@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('areas.create') }}" class="btn btn-success">Crear area</a>

                <form action="{{ url('multipledestroy') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success right">Delete users</button>
                </form>

            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th>id</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Descripción</th>
                        <th class="text-center">Fotografia</th>
                        <th class="text-center">Edit</th>
                        <th class="text-center">Delete</th>
                        <th class="text-center">
                            <input type="checkbox" id="checkAll"> Select All
                        </th>
                    </thead>
                    <tbody>
                        @foreach ($areas as $area)
                            <tr>
                                <td style="width: 10px">{{ $area->id }}</td>
                                <td>{{ $area->nombre }}</td>
                                <td>{{ $area->descripcion }}</td>
                                <td>
                                    <img src="{{ asset($area->fotografia) }}" alt="" width="64px" srcset="">
                                </td>

                                <td class="text-center" style="width: 20px">
                                    <a href="{{ route('areas.edit', $area->id) }}" class="btn btn-primary">
                                        Edit
                                    </a>
                                </td>
                                <td class="text-center" style="width: 20px">
                                    <form action="{{ route('areas.destroy', $area->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Del
                                        </button>
                                    </form>
                                </td>
                                <td class="text-center" style="width: 20px">
                                    <input name='id[]' type="checkbox" id="checkItem" value="{{ $area->id }}">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $areas->links() }}
            </div>
            <div class="card-footer">
                <h1>Sistemas</h1>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script language="javascript">
        $("#checkAll").click(function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>
@endsection
