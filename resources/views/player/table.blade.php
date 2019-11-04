@extends('layouts.barralateral')
@section('title', __('Welcome'))
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
                            <a href="{{ url('/new_player') }}" style="color: white; margin: 0px 0px 20px 0px"
                                class="btn btn-primary pull-right">{{ __('menu.new_player')}}</a>



                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>{{ __('menu.name') }}</th>
                                        <th>{{ __('menu.owner') }}</th>
                                        <th>{{ __('menu.team') }}</th>
                                        <th>Dorsal</th>
                                        <th>{{ __('menu.value') }}</th>
                                        <th>{{ __('menu.position') }}</th>
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
                                        <td>{{ $player->user_name}}</td>
                                        <td>{{ $player->team_name}}</td>
                                        <td>{{ $player->num_dorsal}}</td>
                                        <td>{{ $player->valor_inicial}} &euro;</td>
                                        <td>{{ $player->position_name}}</td>
                                        <td class="text-center">{{ $player->points}}</td>


                                     
                                        <td class="td-actions text-right">

                                            <a type="button" rel="tooltip" class="btn btn-success btn-round"
                                                href="{{ url('/player/' . $player->id . '/edit' ) }}">
                                                <i style="font-size: 1em;  width:6; height:6;"
                                                    class="material-icons">edit</i>
                                            </a>

                                            <button type="submit" rel="tooltip" class="btn btn-danger btn-simple btn-sm"
                                                data-toggle="modal" data-target='#modalDeletePlayer{{$player->id }}'>
                                                <i class="fa fa-times fa-5x"></i>
                                            </button>

                                            <!-- ------------------------------------------- -->


                                        </td>

                                    </tr>
                                    @include('partials.delete_player')

                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th class="text-center">#</th>
                                        <th>{{ __('menu.name') }}</th>
                                        <th>{{ __('menu.owner') }}</th>
                                        <th>{{ __('menu.team') }}</th>
                                        <th>Dorsal</th>
                                        <th class="text-right">{{ __('menu.value') }}</th>
                                        <th class="text-right">{{ __('menu.position') }}</th>
                                        <th class="text-right">{{ __('menu.points') }}</th>
                                        <th class="text-right">{{ __('menu.options') }}</th>
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

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

<link href="    https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" />

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });

</script>

@endsection
