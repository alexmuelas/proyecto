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
                                        {{ __('menu.dorsal')}}:<input type="number"  min="0"class="form-control"
                                            value="{{ old('dorsal') }}" name="dorsal">
                                    </div>
                                </div>
                            </div>

                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                                        {{ __('menu.initial_value')}}:<input type="number" min="0" class="form-control"
                                            value="{{ old('initial_value') }}" name="initial_value">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                                        {{ __('menu.points')}}:<input type="number" min="0" class="form-control"
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

                                        @foreach($positions as $position)
                                            <option value="{{ $position->id }}">{{ $position->name }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                </div>
                            </div>




                            <button type="submit" class="btn btn-primary">{{ __('menu.save')}}</button>
                            <a href="{{ url('/player') }}" class="btn btn-danger">{{ __('menu.cancel')}}</a>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>


            @endsection
