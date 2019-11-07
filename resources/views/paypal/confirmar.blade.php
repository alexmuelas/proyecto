@extends('layouts.barralateral')
@section('title', __('menu.confirm_buy'))
@section('content')

<style>
        /* .imagen {
            width: 50%;
        }

        .imagen img {
            max-width: 100%;
        } */

        table {
            text-align: right;
            border: none;
        }

        .titulo {
            color: white;
            /*background-color: #db4dff;*/
            background-color: green;
            font-size: 20px;
            border-right: 1px solid white;
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

        

        .informacion-footer {
            width: 100%;
            /*background-color: #db4dff;*/
            background-color: green;
        }
    </style>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <h2 class="" style="color:white;">{{ __('menu.purchase')}}</h2>
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
                                        <td>
                                            <h4>{{ $pack->name }}</h4>
                                        </td>
                                        <td>
                                            <h4>{{ $pack->money }}</h4>
                                        </td>
                                        <td>
                                            <h4>{{ $pack->price }}€</h4>
                                        </td>
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
        <a class="btn btn-danger" href="{{ url('/addmoney') }}">{{ __('menu.cancel')}}</a>
        <br><br><br><br><br>
    </div>
</div>
            </div>
        </div>
    </div>
</div>


@endsection
