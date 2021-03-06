@extends('layouts.barralateral')
@section('title', __('menu.edit_user'))
@section('content')

<div class="content text-center">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('menu.edit_profile') }}</h4>
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
                <form action="{{ url('/useredit/' . $user->id) }}" method="post" class="form">
                @csrf
                    @method('PUT')
                    <div class="row">
                     
                      <div class="col-md-5">
                        <div class="form-group">
                          User Name:<input type="text" class="form-control" name="user_name" value= "{{ $user->user_name }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          Email:<input type="email" class="form-control" name="email" value= "{{ $user->email }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          {{ __('menu.name')}}:<input type="text" class="form-control" name="name" value= "{{ $user->name }}">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          {{ __('menu.money')}}:<input type="text" class="form-control" name="money" value= "{{ $user->money }}">
                        </div>
                      </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">{{ __('menu.save')}}</button>
                    <a href="{{ url('/users') }}" class="btn btn-danger">{{ __('menu.cancel')}}</a>

                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>


            @endsection
