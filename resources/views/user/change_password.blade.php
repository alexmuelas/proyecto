@extends('layouts.barralateral')
@section('content')
@section('title', __('menu.change'))


<div class="content text-center">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('menu.change') }}</h4>
                </div>
                <div class="card-body" style="width: auto; margin: auto  140px auto 200px">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ url('/user/' . Auth::user()->id) }}" method="post" class="form">
                @csrf
                    @method('PUT')
                    <div class="row">
                     
                      <div class="col-md-6">
                        <div class="form-group">
                        {{ __('login_register.old_password')}}<input type="password" name="oldpassword" class="form-control">

                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          {{ __('login_register.password')}}:<input type="password" name="password" class="form-control">

                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          {{ __('login_register.password2')}}:<input type="password" name="password_confirmation" class="form-control">

                        </div>
                      </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary pull-center">{{ __('menu.save')}}</button>
                    <a href="{{ url('/home') }}" class="btn btn-danger pull-center">{{ __('menu.cancel')}}</a>

                  </form>
                </div>
              </div>
            </div>


            @endsection
