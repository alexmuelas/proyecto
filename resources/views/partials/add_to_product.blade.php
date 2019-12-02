<div class="modal fade" id="modalAddToProduct{{$player->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{ __('menu.amount_goals')}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <form action="{{ url('/add') }}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ $player->id }}">

                
                <div class="col-md-4">

                    <div class="form-group">
                        <input style="text-align: center; margin: 40px 0px 0px 175px" type="number" min="0"
                            class="form-control" name="quantity">
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="sumbit" class="btn btn-primary">{{ __('menu.add_goals')}}</button>
                </div>
            </form>

        </div>
    </div>
</div>
