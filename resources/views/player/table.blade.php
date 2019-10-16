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
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center">#</th>
                          <th>{{ __('menu.name') }}</th>
                          <th>{{ __('menu.owner') }}</th>
                          <th>{{ __('menu.team') }}</th>
                          <th>Dorsal</th>
                          <th class="text-right">{{ __('menu.value') }}</th>
                          <th class="text-right">{{ __('menu.position') }}</th>
                          <th class="text-right">{{ __('menu.options') }}</th>

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
                          <td class="text-right">{{ $player->valor_inicial}} &euro;</td>
                          <td class="text-right">{{ $player->position}}</td>

                          <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-success btn-round">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                              <i class="material-icons">close</i>
                            </button>
                          </td>

                        </tr>
                        @endforeach

                    
                      </tbody>
                    </table>
                    {{$players->links()}}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      
@endsection
