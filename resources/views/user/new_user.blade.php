@extends('layouts.barralateral')
@section('title', __('menu.new_user'))
@section('content')

<div class="content text-center">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('menu.new_user') }}</h4>
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
                <form action="{{ url('/create_user/' ) }}" method="post" class="form">
                @csrf
                    <div class="row">
                     
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label class="bmd-label-floating"></label> -->
                          User Name:<input type="text" class="form-control" value="{{ old('user_name') }}" name="user_name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label class="bmd-label-floating">{{ Auth::user()->email }}</label> -->
                          Email:<input type="email" class="form-control" value="{{ old('email') }}" name="email">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                          {{ __('menu.name')}}:<input type="text" class="form-control"  value="{{ old('name') }}" name="name">
                        </div>
                      </div>
                  
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                          {{ __('menu.name_myteam') }}:<input type="text" class="form-control" value="{{ old('name_myteam') }}" name="name_myteam">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                          {{ __('menu.money')}}:<input type="number" min="0" class="form-control" value="{{ old('money') }}" name="money">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                          {{ __('login_register.password')}}:<input type="password" class="form-control" name="password">
                        </div>
                      </div>
                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                          {{ __('login_register.password2')}}:<input type="password" class="form-control" name="password_confirmation">
                        </div>
                      </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary pull-right">{{ __('menu.save')}}</button>
                    <a href="{{ url('/users') }}" class="btn btn-danger">{{ __('menu.cancel')}}</a>

                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>


            @endsection
