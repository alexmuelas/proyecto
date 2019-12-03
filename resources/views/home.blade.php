@extends('layouts.barralateral')
@section('title', __('Welcome'))
@section('content')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header card-header-rose">
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title text-center">{{ __('menu.team') }}</h2>
                                    <h4 class="card-category">&nbsp;</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <h5><a class="nav-link  text-center" href="{{ url('/team') }}">
                                                {{ __('menu.go_team') }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header card-header-rose">
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title  text-center">{{ __('menu.money')}}</h2>
                                    <h4 class="card-category  text-center"> {{ Auth::user()->money }} €</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <h5 class="text-center"><a class="nav-link " href="{{ url('/addmoney') }}"> Add
                                                money</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header card-header-rose">
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title  text-center">{{ __('menu.clasification') }}</h2>
                                    <h4 class="card-category">&nbsp;</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <h5><a class="nav-link  text-center" href="{{ url('/clasification') }}">
                                                {{ __('menu.go_clasification') }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>



@endsection
