<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        /* .imagen {
            width: 50%;
        }
        .imagen img {
            max-width: 100%;
        } */

        table {
            text-align: right;
            width: 100%;
            border: none;
        }
        .titulo {
            color: white;
            /*background-color: #db4dff;*/
            background-color: green;
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
            background-color: green;

        }
    </style>
    <title>Document</title>
</head>
<body>

    <div class="row">
        <div class="col-md-6">
            <div class="imagen">
            <!-- Falta insertar logo -->
                <img src="{{ public_path('img/logo_alex.jpg') }}" style="width:100%;" alt="Logo">
            </div>
        </div>
    </div>
<br>
<br>
    <h3>Datos de facturación</h3>
    <ul>
        <li><strong> Nombre:</strong> {{ $comprador->name }}</li>
        <li><strong>Email:</strong> {{ $comprador->email }}</li>
        <li><strong>Fecha compra:</strong>     {{ \Carbon\Carbon::now()->format('d/m/Y') }}</li>

    </ul>
    <br><br>
    <h3>Datos del producto</h3>
    <table class="tabla">
        <tr>
            <th class="titulo text-center">Nombre</th>
            <th class="titulo text-center">Monedas</th>
            <th class="titulo text-center">Precio</th>
        </tr>
        <tr>
            <td class="text-center">{{ $pack->name }}</td>
            <td class="text-center">{{ $pack->money }}</td>
            <td class="text-center">{{ $pack->price }}€</td>
        </tr>
    </table>


<footer>
    <div class="icono">
        <img src="" width="10%" alt="Logo Comunio">
    </div>
    <div class="informacion-footer">
        <p>Football Player España</p>
    </div>

</footer>
</body>
</html>