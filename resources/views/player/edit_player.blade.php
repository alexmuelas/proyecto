@extends('layouts.barralateral')
@section('title', __('menu.edit_player'))
@section('content')

<div class="content text-center">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('menu.new_player') }}</h4>
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
                        <form action="{{ url('/player/' . $player->id) }}" method="post" class="form">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ __('menu.name')}}:<input type="text" class="form-control"
                                            value="{{ $player->name }}" name="name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="">

                                        {{ __('menu.owner') }}:

                                        <select name="owner" class="form-control">

                                            @foreach($owners as $owner)
                                            <option value="{{ $owner->id }}" 
                                            @if($player->id_user == old('owner',
                                                $owner->id)) selected 
                                                @endif
                                                >{{ $owner->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="">

                                        {{ __('menu.team') }}:

                                        <select name="team" class="form-control">


                                            <option value="0">{{__('menu.choose_team')}}</option>
                                            @foreach($teams as $team)
                                            <option value="{{ $team->id }}"

                                            @if($player->id_team == old('team',
                                                $team->id)) selected 
                                                @endif
                                                >{{ $team->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ __('menu.dorsal')}}:<input type="text" class="form-control"
                                            value="{{ $player->num_dorsal }}" name="dorsal">
                                    </div>
                                </div>
                            </div>

                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ __('menu.initial_value')}}:<input type="text" class="form-control"
                                            value="{{ $player->valor_inicial }}" name="initial_value">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ __('menu.points')}}:<input type="text" class="form-control"
                                            value="{{ $player->points }}" name="points">
                                    </div>
                                </div>
                            </div>


                            <div class="row">


                                <div class="col-md-6">
                                    <div class="">

                                        {{ __('menu.choose_position')}}:

                                        <select name="position" class="form-control">
                                        
                                        @foreach($positions as $position)
                                            <option value="{{ $position->id }}" 
                                            @if($player->id_position == old('position',
                                                $position->id)) selected 
                                                @endif
                                                >{{ $position->name }}</option>
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
