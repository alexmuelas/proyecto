@extends('layouts.barralateral')
@section('title', __('menu.new_player'))
@section('content')

<div class="content text-center">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('menu.new_player') }}</h4>
                        <!-- <p class="card-category">Complete your profile</p> -->
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ url('/create_puja' ) }}" method="post" class="form">
                            @csrf
                            <div class="row">


                                <div class="col-md-6">
                                    <div class="">
                                        <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->

                                        {{ __('menu.owner') }}:

                                        <select name="player_name" class="form-control">

                                            <option value="0">{{__('menu.choose_user')}}</option>
                                            @foreach($players as $player)
                                            <option value="{{ $player->name }}">{{ $player->name }}----{{ $player->valor_inicial }}€</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                                        {{ __('menu.money')}}:<input type="number" min="0" class="form-control"
                                            value="{{ old('money') }}" name="money">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('menu.save')}}</button>
                            <a href="{{ url('/pujas') }}" class="btn btn-danger">{{ __('menu.cancel')}}</a>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>


            @endsection
