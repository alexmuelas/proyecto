<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .imagen {
            width: 50%;
        }
        .imagen img {
            max-width: 100%;
        }

        table {
            text-align: right;
            width: 100%;
            border: none;
        }
        .titulo {
            color: white;
            /*background-color: #db4dff;*/
            background-color: #1197ca;
            font-size: 20px;
            border-right: 2px solid white;
        }

        ul li {
            list-style: none;
        }

        td, th {
            padding: 10px;
        }
        td {
            font-size: 13px;
        }

        footer {
            position: fixed;
            bottom: 100px;
            color: white;
            text-align: center;
        }

        .icono {
            text-align: center;

        }

        .informacion-footer {
            width: 100%;
            /*background-color: #db4dff;*/
            background-color: #1197ca;

        }
    </style>
    <title>Document</title>
</head>
<body>

    <div class="row">
        <div class="col-md-6">
            <div class="imagen">
                <img src="{{ public_path('img/logo-fromapop.jpg') }}" alt="Logo Fromapop">
            </div>
        </div>
    </div>

    <h5>Datos de facturación</h5>
    <ul>
        <li>Nombre y apellidos: {{ $comprador->name }}</li>
        <li>Dirección: {{ $comprador->address }}</li>
        <li>Teléfono: {{ $comprador->phone }}</li>
        <li>Email: {{ $comprador->email }}</li>
    </ul>
    <br><br>
    <h5>Datos del producto</h5>
    <table class="tabla">
        <tr>
            <th class="titulo">Nombre</th>
            <th class="titulo">Monedas</th>
            <th class="titulo">Precio</th>
        </tr>
        <tr>
            <td>{{ $pack->name }}</td>
            <td>{{ $pack->money }}</td>
            <td>{{ $pack->price }}</td>
        </tr>
    </table>



<footer>
    <div class="icono">
        <img src="" width="10%" alt="Logo Fromapop">
    </div>
    <div class="informacion-footer">
        <p>FromaPop España</p>
        <p>fromapop@gmail.com</p>
    </div>

</footer>
</body>
</html>