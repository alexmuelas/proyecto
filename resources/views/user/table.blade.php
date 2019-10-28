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
                        <a href="{{ url('/new_user') }}" style ="color: white" class="btn btn-primary pull-right">{{ __('menu.new_user')}}</a>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>{{ __('menu.name') }}</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>{{ __('menu.name_myteam') }}</th>
                                        <th class="text-right">{{ __('menu.money') }}</th>
                                        <th class="text-right">{{ __('menu.options') }}</th>
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
                                        <td class="text-right">{{ $user->money}} &euro;</td>
                                        <td class="td-actions text-right">
                                            <a type="button" rel="tooltip" class="btn btn-success btn-round" href="{{ url('/user/' . $user->id . '/edit' ) }}">
                                                <i class="material-icons">edit</i>
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
                    <button type="submit" rel="tooltip"
                                                    class="btn btn-danger btn-simple btn-sm" data-toggle="modal"
                            data-target='#modalAddToCart{{$user->id }}' >
                                                    <i class="fa fa-times"></i>
                                                </button>
                    @endif
            <!-- ------------------------------------------- -->


                                        </td>

                                    </tr>
                                    @include('partials.delete_user')

                                    @endforeach


                                </tbody>
                            </table>
                            {{$users->links()}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
