<div class="modal fade" id='modalDeletePlayer{{$player->id }}' tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> {{ __('menu.sure') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <form action="{{ url('/player/' . $player->id) }}" method="post" class="d-inline-block">
                @csrf
                @method('DELETE')
                <input type="hidden" value="{{$player->id }}">
                
                <div class="modal-footer">
                    <button type="sumbit" class="btn btn-primary">{{ __('menu.delete') }}</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('menu.cancel') }}</button>
                </div>
            </form>

        </div>
    </div>
</div>
