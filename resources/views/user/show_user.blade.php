@extends('layouts.barralateral')
@section('title', __('menu.perfil'))
@section('content')

<div class="content text-center">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Your Profile</h4>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <!-- <label class="bmd-label-floating"></label> -->
                                    User Name:<input type="text" class="form-control" name="user_name"
                                        value="{{ Auth::user()->user_name }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <label class="bmd-label-floating">{{ Auth::user()->email }}</label> -->
                                    Email:<input type="email" class="form-control" name="email"
                                        value="{{ Auth::user()->email }}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                                    {{ __('menu.name')}}:<input type="text" class="form-control" name="name"
                                        value="{{ Auth::user()->name }}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                                    {{ __('menu.name_myteam')}}:<input type="text" class="form-control" name="name"
                                        value="{{ Auth::user()->name_myteam }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                                    {{ __('menu.money')}}:<input type="text" class="form-control" name="name"
                                        value="{{ Auth::user()->money }} €" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @endsection
