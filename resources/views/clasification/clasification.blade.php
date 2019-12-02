@extends('layouts.barralateral')
@section('title', __('menu.table_user'))
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
                        <h4 class="card-title">{{ __('menu.table_user') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            
                            <table id="example2" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>User Name</th>
                                        <th>{{ __('menu.name_myteam') }}</th>
                                        <th>{{ __('menu.titular') }}</th>
                                        <th>{{ __('menu.points') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)

                                    <tr>

                                        <td class="text-center">{{ $user->id}}</td>
                                        <td>{{ $user->user_name}}</td>
                                        <td>{{ $user->name_myteam}}</td>
                                        <td>{{ $user->alineacion}}</td>
                                        <td class="text-left">{{ $user->points_myteam}}</td>
                                        
                                    @endforeach


                                </tbody>
                                <tfoot>
                                <tr>
                                <th class="text-center">#</th>
                                        <th>User Name</th>
                                        <th>{{ __('menu.name_myteam') }}</th>
                                        <th>{{ __('menu.titular') }}</th>
                                        <th>{{ __('menu.points') }}</th>
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
