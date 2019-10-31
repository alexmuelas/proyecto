@extends('layouts.barralateral')
@section('title', __('Welcome'))
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
                        <form action="{{ url('/create_player/' ) }}" method="post" class="form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                                        {{ __('menu.name')}}:<input type="text" class="form-control"
                                            value="{{ old('name') }}" name="name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="">
                                        <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->

                                        {{ __('menu.owner') }}:

                                        <select name="owner" class="form-control">

                                            <option value="0">{{__('menu.choose_user')}}</option>
                                            @foreach($owners as $owner)
                                            <option value="{{ $owner->id }}">{{ $owner->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="">
                                        <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->

                                        {{ __('menu.team') }}:

                                        <select name="team" class="form-control">

                                            <option value="0">{{__('menu.choose_team')}}</option>
                                            @foreach($teams as $team)
                                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                                        {{ __('menu.dorsal')}}:<input type="text" class="form-control"
                                            value="{{ old('dorsal') }}" name="dorsal">
                                    </div>
                                </div>
                            </div>

                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                                        {{ __('menu.initial_value')}}:<input type="text" class="form-control"
                                            value="{{ old('initial_value') }}" name="initial_value">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                                        {{ __('menu.points')}}:<input type="text" class="form-control"
                                            value="{{ old('points') }}" name="points">
                                    </div>
                                </div>
                            </div>


                            <div class="row">


                                <div class="col-md-6">
                                    <div class="">
                                        <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->

                                        {{ __('menu.choose_position')}}:

                                        <select name="position" class="form-control">

                                            <option value="0">{{ __('menu.choose_position')}}</option>
                                            <option value="{{ __('menu.forward')}}">{{ __('menu.forward')}}</option>
                                            <option value="{{ __('menu.goalkeeper')}}">{{ __('menu.goalkeeper')}}
                                            </option>
                                            <option value="{{ __('menu.defending')}}">{{ __('menu.defending')}}</option>
                                            <option value="{{ __('menu.midfield_player')}}">
                                                {{ __('menu.midfield_player')}}</option>


                                        </select>
                                    </div>
                                </div>
                            </div>




                            <button type="submit" class="btn btn-primary pull-right">{{ __('menu.save')}}</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>


            @endsection
