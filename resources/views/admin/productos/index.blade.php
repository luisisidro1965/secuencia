@extends('layouts.app')
 
@section('content')
<div class="container">
    <h1></h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 7 CRUD Example from Scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('producto.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Categoria</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->cantidad }}</td>
            <td>{{ $producto->categoria }}</td>
            <td>
                <form action="{{ route('producto.destroy',$producto->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('producto.show',$producto->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('producto.edit',$producto->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
</div>
      
@endsection