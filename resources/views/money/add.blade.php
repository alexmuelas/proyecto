@extends('layouts.barralateral')
@section('title', __('Welcome'))
@section('content')

<div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto text-center">
            <h2 class="title">Pick the best plan for you</h2>
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
                <h3 class="card-title text-warning">+{{$pack->money}} monedas</h3>
                <h3 class="card-title"> {{$pack->price}}€</h3>
              </div>
              <div class="card-footer justify-content-center ">
              <a href="{{ url('/packs/' . $pack->id . '/comprar')}}" class="btn btn-round btn-rose">Comprar</a>
              </div>
            </div>
          </div>
        @endforeach
          <!-- <div class="col-lg-4 col-md-6">
            <div class="card card-pricing ">
              <h6 class="card-category"> Small Company</h6>
              <div class="card-body">
                <div class="card-icon icon-rose ">
                  <i class="material-icons">home</i>
                </div>
                <h3 class="card-title">29$</h3>
              </div>
              <div class="card-footer justify-content-center ">
                <a href="#pablo" class="btn btn-round btn-rose">Choose Plan</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-pricing">
              <h6 class="card-category"> Medium Company</h6>
              <div class="card-body">
                <div class="card-icon  icon-rose ">
                  <i class="material-icons">business</i>
                </div>
                <h3 class="card-title">69$</h3>
              </div>
              <div class="card-footer justify-content-center ">
                <a href="#pablo" class="btn btn-round btn-rose">Choose Plan</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-pricing">
              <h6 class="card-category"> Extra Pack</h6>
              <div class="card-body">
                <div class="card-icon  icon-rose ">
                  <i class="material-icons">account_balance</i>
                </div>
                <h3 class="card-title">159$</h3>
              </div>
              <div class="card-footer justify-content-center ">
                <a href="#pablo" class="btn btn-round btn-rose">Choose Plan</a>
              </div>
            </div>
          </div> -->
        </div>
      </div>


      @endsection
