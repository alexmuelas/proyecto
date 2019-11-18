@extends('layouts.barralateral')
@section('title', __('menu.player'))
@section('content')


<br>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">{{ __('menu.table_player') }}</h4>
                    </div>
                    @if(Session::has('alertas'))
                       <div class="alert alert-danger">
                                <ul>
                                        <li class="text-center">{{ Session::get('alertas') }}</li>
                                </ul>
                            </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- <a href="{{ url('/new_player') }}" style="color: white; margin: 0px 0px 20px 0px"
                                class="btn btn-primary pull-right">{{ __('menu.new_player')}}</a> -->

                            <a class="btn btn-primary btn-round btn-sm pull-right" data-toggle="modal"
                                data-target="#modalAddToProduct" id="" title="{{ __('menu.add_goals')}}"
                                style="color:white;">
                                {{ __('menu.ele_position')}} </a>
                            @include('partials.add_to_alineacion')

                            <table id="example4" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>{{ __('menu.name') }}</th>
                                        <th>{{ __('menu.team') }}</th>
                                        <th>Dorsal</th>
                                        <th>{{ __('menu.value') }}</th>
                                        <th>{{ __('menu.position') }}</th>
                                        <th>{{ __('menu.goals') }}</th>
                                        <th>{{ __('menu.titular') }}</th>
                                        <th>{{ __('menu.points') }}</th>
                                        <th>{{ __('menu.options') }}</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($players as $player)

                                    <tr>

                                        <td class="text-center">{{ $player->id}}</td>
                                        <td>{{ $player->name}}</td>
                                        <!-- <td>{{ $player->id_user}}</td> -->
                                        <td>{{ $player->team_name}}</td>
                                        <td>{{ $player->num_dorsal}}</td>
                                        <td>{{ $player->valor_inicial}} &euro;</td>
                                        <td>{{ $player->position_name}}</td>
                                        <td class="text-center">{{ $player->goals}}</td>

                                        @if($player->titular == '0')
                                        <td class="text-center"> No</td>
                                        @else
                                        <td class="text-center"> Si</td>
                                        @endif

                                        <td class="text-center">{{ $player->points}}</td>

                                        <td class="td-actions text-right">

                                            <button class="btn btn-primary btn-round btn-lm" data-toggle="modal"
                                                data-target="#modalAddToTitular{{$player->id }}" id="{{$player->id}}"
                                                title="{{ __('menu.titular')}}">
                                                <i style="font-size: 1em;  width:6; height:6;"
                                                    class="material-icons">compare_arrows</i> </button> </button>

                                        </td>


                                        @include('partials.add_to_titular')

                                        @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>{{ __('menu.name') }}</th>
                                        <th>{{ __('menu.team') }}</th>
                                        <th>Dorsal</th>
                                        <th class="text-right">{{ __('menu.value') }}</th>
                                        <th class="text-right">{{ __('menu.position') }}</th>
                                        <th class="text-right">{{ __('menu.goals') }}</th>
                                        <th class="text-right">{{ __('menu.titular') }}</th>
                                        <th class="text-right">{{ __('menu.points') }}</th>
                                        <th>{{ __('menu.options') }}</th>

                                    </tr>
                                </tfoot>
                            </table>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
