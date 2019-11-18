<div class="modal fade" id="modalAddToTitular{{$player->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{ __('menu.titular')}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <form action="{{ url('/add_titular') }}" method="post">
                @csrf
                <input type="hidden" name="player_id" value="{{$player->id}}">

                <!-- <div class="modal-body"> -->
                    <!-- <input type="number" min="0" name="quantity2" value="0">
                </div> -->
                <div class="col-md-4">

                    <div class="form-group" >
                        <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                        <!-- <input type="number" min="0" class="form-control" name="quantity"> -->
                        <select name="titular" style="text-align: center; margin: 0px 0px 40px 175px" class="form-control">

                                            <option value="X">{{__('menu.choose_team')}}</option>
                                            <option value="1">Si</option>
                                            <option value="0">No</option>
                                        </select>
                                        
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="sumbit" class="btn btn-primary">{{ __('menu.add_titular')}}</button>
                </div>
            </form>

        </div>
    </div>
</div>
