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





                            <button class="btn btn-primary btn-simple btn-sm  pull-right"> <a
                                    href="{{ url('/new_player') }}"
                                    style="color: white; margin: 0px 0px 20px 0px">{{ __('menu.new_player')}}</a>

                            </button>



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

                                            <a type="button" rel="tooltip" class="btn btn-success btn-round btn-sm"
                                                href="{{ url('/player/' . $puja->id . '/edit' ) }}">
                                                <i style="font-size: 1em;  width:6; height:6;"
                                                    class="material-icons">edit</i>
                                            </a>

                                            <button type="submit" rel="tooltip" class="btn btn-danger btn-simple btn-sm"
                                                data-toggle="modal" data-target='#modalDeletePlayer{{$puja->id }}'>
                                                <i style="font-size: 1em;  width:6; height:6;"
                                                    class="material-icons">clear</i>
                                            </button>

                                            <!-- ------------------------------------------- -->
                                            <button class="btn btn-primary btn-round btn-sm" data-toggle="modal"
                                                data-target="#modalAddToProduct{{$puja->id }}" id="{{$puja->id}}"
                                                title="{{ __('menu.add_goals')}}">
                                                <i style="font-size: 1em;  width:6; height:6;"
                                                    class="material-icons">sports_soccer</i></button>

                                        </td>

                                    </tr>

                                    @include('partials.delete_player')
                                    @include('partials.add_to_product')

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