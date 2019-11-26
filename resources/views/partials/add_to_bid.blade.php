<div class="modal fade" id="modalAddToBid{{$puja->id }}{{ $puja->money_puja}}{{$puja->id_vendedor}}{{$puja->name_player }}{{$puja->id_position}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{ __('menu.amount_goals')}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <form action="{{ url('/add_bid') }}" method="post">
                @csrf
                <input type="hidden" name="puja_id" value="{{ $puja->id }}">
                <input type="hidden" name="id_player" value="{{ $puja->id_player }}">
                <!-- <input type="hidden" name="name_player" value="{{ $puja->name_player }}">
                <input type="hidden" name="id_position" value="{{ $puja->id_position }}"> -->


                <!-- <div class="modal-body">
                    <input type="number" min="0" name="quantity2" value="0">
                </div> -->
                <div class="col-md-4">

                    <div class="form-group">
                        <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                        <input style="text-align: center; margin: 40px 0px 0px 175px" type="number" min="{{ $puja->money_puja}}"
                            value="{{ $puja->money_puja}}" class="form-control" name="quantity">
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="sumbit" class="btn btn-primary">{{ __('menu.add_bid')}}</button>
                </div>
            </form>

        </div>
    </div>
</div>
