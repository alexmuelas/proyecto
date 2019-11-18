@extends('layouts.barralateral')
@section('title', __('menu.player'))
@section('content')



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
                    <div class="card-body">
                        <div class="table-responsive">
                        
                            <table id="example3" class="display" style="width:100%">
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
