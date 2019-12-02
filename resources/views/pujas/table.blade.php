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
                    @if(Session::has('alertas'))
                       <div class="alert alert-danger">
                                <ul>
                                        <li class="text-center">{{ Session::get('alertas') }}</li>
                                </ul>
                            </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">





                         <a class="btn btn-primary btn-simple btn-sm  pull-right"
                                    href="{{ url('/new_puja') }}"
                                    style="color: white; margin: 0px 0px 20px 0px">{{ __('menu.new_player')}}</a>




                            <table id="example5" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>{{ __('menu.name') }}</th>
                                        <th>{{ __('menu.position') }}</th>
                                        <th>{{ __('menu.money') }}</th>
                                        <th>{{ __('menu.options') }}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pujas as $puja)

                                    <tr>

                                        <td class="text-center">{{ $puja->id}}</td>
                                        <td>{{ $puja->name_player}}</td>
                                        <td>{{ $puja->position_name}}</td>
                                        <td>{{ $puja->money_puja}}</td>




                                        <td class="td-actions text-right">

                                            <!-- <a type="button" rel="tooltip" class="btn btn-success btn-round btn-sm"
                                                href="{{ url('/player/' . $puja->id . '/edit' ) }}">
                                                <i style="font-size: 1em;  width:6; height:6;"
                                                    class="material-icons">edit</i>
                                            </a> -->

                                            
                                            <!--------------------------------------------- -->
                                            <button class="btn btn-primary btn-round btn-sm" data-toggle="modal"
                                                data-target="#modalAddToBid{{$puja->id }}{{ $puja->money_puja}}{{$puja->id_vendedor}}{{$puja->name_player }}{{$puja->id_position}}" id="{{$puja->id}}"
                                                title="{{ __('menu.add_puja')}}">
                                                <i style="font-size: 1em;  width:6; height:6;"
                                                    class="material-icons">sports_soccer</i></button>

                                        </td>

                                    </tr>

                                    @include('partials.add_to_bid')

                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>{{ __('menu.name') }}</th>
                                        <th>{{ __('menu.position') }}</th>
                                        <th>{{ __('menu.money') }}</th>
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
