@extends('layouts.barralateral')
@section('title', __('menu.edit_my_profile'))
@section('content')

<div class="content text-center">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('menu.edit_profile') }}</h4>
                  <p class="card-category">{{ __('menu.complete_profile')}}</p>
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
                <form action="{{ url('/usersedit') }}" method="POST" class="form">
                @csrf
                    @method('PUT')
                    <div class="row">
                     
                      <div class="col-md-5" >
                        <div class="form-group">
                          User Name:<input type="text" class="form-control" name="user_name" value= "{{ Auth::user()->user_name }}">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          Email:<input type="email" class="form-control" name="email" value= "{{ Auth::user()->email }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          {{ __('menu.name')}}:<input type="text" class="form-control" name="name" value= "{{ Auth::user()->name }}">
                        </div>
                      </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary pull-center">{{ __('menu.save')}}</button>
                    <a href="{{ url('/home') }}" class="btn btn-danger pull-center">{{ __('menu.cancel')}}</a>

                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>


            @endsection
