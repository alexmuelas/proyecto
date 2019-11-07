@extends('layouts.barralateral')
@section('title', __('add_money'))
@section('content')

<div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto text-center">
            <h2 class=""  style="color:white;">{{ __('menu.plan')}}</h2>
          </div>
        </div>

        <div class="row">  

        @foreach($packs as $pack)
        
            <div class="col-lg-4 col-md-6">
            <div class="card card-pricing">
              <h6 class="card-category"> {{$pack->name}}</h6>
              <div class="card-body">
                <div class="card-icon  icon-rose ">
                  <i class="material-icons"> {{$pack->logo}}</i>
                </div>
                <h3 class="card-title text-warning">+{{$pack->money}} {{ __('menu.coin')}}</h3>
                <h3 class="card-title"> {{$pack->price}}€</h3>
              </div>
              <div class="card-footer justify-content-center ">
              <a href="{{ url('/packs/' . $pack->id . '/comprar')}}" class="btn btn-round btn-rose">{{ __('menu.buy')}}</a>
              </div>
            </div>
          </div>

        @endforeach
        </div>
      </div>


      @endsection
