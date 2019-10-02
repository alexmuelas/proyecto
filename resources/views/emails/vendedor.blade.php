<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<div class="card">
    <div class="card-header">
        <h1 class="text-center">FROMAPOP ESPAÑA</h1>
        <hr>
        <p>Hola {{ $vendedor->name }}.</p>
        <p>Enhorabuena, te han comprado un producto en <b>FromaPop España</b></p>
    </div>
    <div class="card-body">
        <h4>Datos del producto:</h4>
        <ul>
            <li><b>Nombre:</b> {{$product->name}}</li>
            <li><b>Descripcion:</b> {{$product->description}}</li>
            <li><b>Categoria:</b> {{$product->category->name}}</li>
            <br>
            <li><b>Precio:</b> {{$product->price}}</li>
        </ul>
        <h4>Datos del comprador</h4>
        <ul>
            <li><b>Nombre:</b> {{$user->name}}</li>
            <li><b>Nombre de usuario:</b> {{$user->username}}</li>
            <li><b>Email:</b> {{$user->email}}</li>
            <li><b>Telefono:</b> {{$user->phone}}</li>
            <li><b>Dirección:</b> {{ $user->address }}</li>
        </ul>
        <hr>
        <form action="{{ route('descargarFactura') }}" method="POST">
            @csrf
            <input type="hidden" name="producto" value="{{$product->id}}">
            <button type="submit" class="btn btn-success btn-icon btn-sm">Descargar factura</button>
        </form>
    </div>
</div>
</body>
</html>
