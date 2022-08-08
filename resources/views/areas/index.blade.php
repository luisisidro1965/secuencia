@extends('layouts.app')

@section('content')
     <form action="{{ route('areas.create') }}" method="get">
          <button type="submit">Crear area</button>
     </form>
    <div class="container">
     <table>
          <thead>
               <th>id</th>
               <th>Nombre</th>
          </thead>
          <tbody>
               @foreach ($areas as $area)
               <tr>
                    <td>{{$area ->id }}</td>
                    <td>{{$area ->nombre }}</td>
               </tr>
               @endforeach
          </tbody>
     </table>
    </div>
@endsection