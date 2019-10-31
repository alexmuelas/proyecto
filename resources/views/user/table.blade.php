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
                        <h4 class="card-title">{{ __('menu.table_user') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="{{ url('/new_user') }}" style="color: white; margin: 0px 0px 20px 0px"
                                class="btn btn-primary pull-right">{{ __('menu.new_user')}}</a>



                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>{{ __('menu.name') }}</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>{{ __('menu.name_myteam') }}</th>
                                        <th>{{ __('menu.money') }}</th>
                                        <th>{{ __('menu.options') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)

                                    <tr>

                                        <td class="text-center">{{ $user->id}}</td>
                                        <td>{{ $user->name}}</td>
                                        <td>{{ $user->user_name}}</td>
                                        <td>{{ $user->email}}</td>
                                        <th>{{ $user->name_myteam}}</th>
                                        <td class="text-left">{{ $user->money}} &euro;</td>
                                        <td class="td-actions text-right">
                                            <a type="button" rel="tooltip" class="btn btn-success btn-round"
                                                href="{{ url('/user/' . $user->id . '/edit' ) }}">
                                                <i style="font-size: 1em;  width:6; height:6;" class="material-icons">edit</i>
                                            </a>



                                            <!-- FUNCIONA -->
                                            <!-- <form action="{{ url('/users/' . $user->id) }}" method="post"
            class="d-inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" rel="tooltip" title="Eliminar"
                class="btn btn-danger btn-simple btn-sm">
                <i class="fa fa-times"></i>
            </button>
        </form> -->

                                            <!-- ------------------------------------------- -->


                                            <!-- <button class="btn btn-primary btn-round" data-toggle="modal"
data-target="#modalAddToCart"
>
<i class="fa fa-cart-plus"></i> E
</button> -->

                                            @if($user->id != Auth::user()->id)
                                                <button type="submit" rel="tooltip" class="btn btn-danger btn-simple btn-sm"
                                                    data-toggle="modal" data-target='#modalAddToCart{{$user->id }}'>
                                                    <i class="fa fa-times fa-5x"></i>
                                                </button>
                                            @endif
                                            <!-- ------------------------------------------- -->


                                        </td>

                                    </tr>
                                    @include('partials.delete_user')

                                    @endforeach


                                </tbody>
                                <tfoot>
                                <tr>
                                        <th class="text-center">#</th>
                                        <th>{{ __('menu.name') }}</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>{{ __('menu.name_myteam') }}</th>
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

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

<link href="    https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" />

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });

</script>



@endsection
