@extends('layouts.barralateral')
@section('title', __('confirm_buy'))
@section('content')

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .imagen {
            width: 50%;
        }

        .imagen img {
            max-width: 100%;
        }

        table {
            text-align: right;
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
            bottom: 0;
            color: white;
            text-align: center;
            width: 100%;
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
    <title>Confirmar pedido</title>
</head>
<body>

<div class="row">
          <div class="col-md-6 ml-auto mr-auto text-center">
            <h2 class=""  style="color:white;">{{ __('menu.purchase')}}</h2>
          </div>
        </div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-title">
                <h5 class="text-center"></h5>
            </div>
            <div class="card-body  align-items-center d-flex justify-content-center">
                <table class="tabla text-center">
                    <tr>
                        <th class="titulo">{{ __('menu.name')}}</th>
                        <th class="titulo">{{ __('menu.coin2')}}</th>
                        <th class="titulo">{{ __('menu.price')}}</th>
                    </tr>
                    <tr>
                        <td><h4>{{ $pack->name }}</h4></td>
                        <td><h4>{{ $pack->money }}</h4></td>
                        <td><h4>{{ $pack->price }}€</h4></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>



<br><br>

<div class="row text-center">
    <div class="col-md-5"></div>
    <div class="col-md-2">
        <form class="" method="POST" id="payment-form"  action="{{route('paypal-pay')}}">
            {{ csrf_field() }}

            <input class="form-group" hidden name="amount" type="number" value="{{$pack->price}}">
            <input class="form-group" hidden name="name" type="text" value="{{$pack->name}}">
            <input type="submit" class="btn" style="background: #e91e63; color:white" value="{{ __('menu.confirm')}}">
        </form>
        <br>
        <a class="btn btn-danger" href="#">{{ __('menu.cancel')}}</a>
        <br><br><br><br><br>
    </div>
</div>

<!-- <footer>

    <div class="informacion-footer">
        <p>Comunio España</p>
    </div>

</footer> -->
</body>
</html>

@endsection
