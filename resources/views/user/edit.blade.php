@extends('layouts.barralateral')
@section('title', __('Welcome'))
@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                <form action="{{ url('/usersedit') }}" method="POST" class="form">
                @csrf
                    @method('PUT')
                    <div class="row">
                     
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ Auth::user()->user_name }}</label>
                          <input type="text" class="form-control" name="user_name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ Auth::user()->email }}</label>
                          <input type="email" class="form-control" name="email">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ Auth::user()->name }}</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>


            @endsection
