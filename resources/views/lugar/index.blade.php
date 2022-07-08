<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
</head>
<body>
     <div class="container">
          <h1>Lista de lugares</h1>
          <table>
               <thead>
                    <th>id</th>
                    <th>nombre</th>
                    <th>descripcion</th>
                    <th>responsable</th>
                    <th>capacidad</th>
               </thead>
               @foreach ($lugares as $lugar)
                   <tr>
                    <td>{{ $lugar->id }}</td>
                    <td>{{ $lugar->nombre }}</td>
                    <td>{{ $lugar->descripcion }}</td>
                    <td>{{ $lugar->capacidad }}</td>
                    <td>{{ $lugar->responsable }}</td>
                   </tr>
               @endforeach
          </table>
     </div>
</body>
</html>