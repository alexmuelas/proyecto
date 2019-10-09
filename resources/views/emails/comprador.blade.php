<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style media="screen">



    </style>
</head>
<body>
<div class="card">
    <div class="card-header">
        <h1 class="text-center">COMUNIO</h1>
        <hr>
        <p>Hola {{ $user->name }}.</p>
        <p>Gracias por comprar en Comunio</p>
    </div>
    <div class="card-body">
        <h4>Datos del producto:</h4>
        <ul>
            <li><strong>Nombre:</strong> {{$pack->name}}</li>
            <li><strong>Monedas:</strong> {{$pack->money}}</li>
            <li><strong>Precio:</strong> {{$pack->price}}</li>
        </ul>
        <hr>


        <!-- <form action="{{ route('descargarFactura') }}" method="POST">
            @csrf
            <input type="hidden" name="producto" value="{{$pack->id}}">
            <button type="submit" class="btn btn-success btn-icon btn-sm">Descargar factura</button>
        </form> -->

    </div>
</div>
</body>
</html>
