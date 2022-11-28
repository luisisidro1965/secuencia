//const lista = [];
url = "calif.json";
var cliente =             cliente =`<table>
<thead>
<th>id</th>
<th>matricula</th>
<th>nombre</th>
</thead>
<tbody>`;
fetch(url)
    .then((response) => response.json())
    .then((result) => {
        result.datos.forEach((element) => {
                cliente +
                `
            
            <tr>
            <td>${element.id}</td>
            <td>${element.matricula}</td>
            <td>${element.nombre}</td>
            </tr>
            </tbody>
            
            </table>`;
        });
        document.getElementById("mostrar").innerHTML = cliente;
    });
