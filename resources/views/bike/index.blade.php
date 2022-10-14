<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }
            
            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }
            
            tr:nth-child(even) {
              background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <h1>Listado de bicicletas</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Borrar</th>
                <th>Editar</th>
                <th>Ver</th>
            </tr>
            <tr>
                <td>1</td>
                <td>bici roja</td>
                <td>100.00</td>
                <td>
                    <form action="{{ url('destroy') }}" method="post">
                        @method('delete')
                    <input type="submit" value="Borrar"/>
                    <a href="{{ url('destroy') }}">Borrar</a>
                    </form>
                </td>    
                <td></td>
                <td><a href="{{ url('bike/' . 1) }}">show</a>
                    <!--form action="{{ url('show') }}" method="get">
                        @method('put')
                        <input type="submit" value="Submit"/>
                    </form-->
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>bici azul</td>
                <td>120.00</td>
                <td><a href="{{ url('destroy') }}">Borrar</a></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <br>
        <form action="{{ url('bike/create') }}" method="get">
            @method('create')
            <input type="submit" value="Add bike"/>
        </form>
    </body>
</html>