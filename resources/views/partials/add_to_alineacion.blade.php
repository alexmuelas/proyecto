<div class="modal fade" id="modalAddToProduct" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{ __('menu.amount_goals')}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <form action="{{ url('/add_position') }}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="">

                <!-- <div class="modal-body"> -->
                    <!-- <input type="number" min="0" name="quantity2" value="0">
                </div> -->
                <div class="col-md-4">

                    <div class="form-group" >
                        <!-- <label class="bmd-label-floating">{{ Auth::user()->name }}</label> -->
                        <!-- <input type="number" min="0" class="form-control" name="quantity"> -->
                        <select name="alineacion" style="text-align: center; margin: 0px 0px 40px 175px" class="form-control">

                                            <option value="0">{{__('menu.choose_team')}}</option>
                                            <option value="1-4-4-2">1-4-4-2</option>
                                            <option value="1-3-4-3">1-3-4-3</option>
                                            <option value="1-4-5-1">1-4-5-1</option>
                                            <option value="1-4-3-3">1-4-3-3</option>

                                        </select>
                                        
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
