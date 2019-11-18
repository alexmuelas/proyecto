<?php

namespace App\Http\Controllers;

use App\User;
use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function table_team()
    {
        
        // $players = Player::paginate(10);

        $players = Player::All()->Where('id_user', Auth::user()->id);

        return view ( 'team.team', compact ('players') );
    }

    public function table_edit_team()
    {
        
        // $players = Player::paginate(10);

        $players = Player::All()->Where('id_user', Auth::user()->id);

        return view ( 'team.edit_team', compact ('players') );
    }

    public function add_position(Request $request)
    {
        $position = $request->alineacion;

        if($position !=0){

       
        $id = Auth::user()->id;

                $user = User::find($id);

                $user->alineacion = $position;
                //dd($request);
                $user->save();
            }
            return redirect('edit_team');


    }


    public function add_titular(Request $request,Player $player, User $user)
    {
        $player_id = $request->player_id;

        $titular = $request->titular;

        //Obtengo la alineacion del usuario logeado
        $user_position = Auth::user()->alineacion;

        //Obtengo la alineacion separada en un array
        $array = explode('-',$user_position);

        //Obtengo al jugador
        $players = Player::Where('id', $player_id)->get();

        //Obtengo la posicion del jugador
        $player_position = $players[0]->id_position;

        //Obtengo el numero de jugadores que tienen la id del usuario actual, con la posicion del jugador que estoy selecionando ahora mismo
        //y cuento cuantos son titulares
        $cuenta = Player::All()->Where('id_user', Auth::user()->id)->Where('id_position', $player_position)->Where('titular', 1);


        if($titular !="X"){

            if($player_position == 1 && count($cuenta)<$array[0] || $titular == 0){

                $player = Player::find($player_id);
                $player->titular = $titular;
                $player->save();

                return redirect('edit_team');

            }elseif($player_position == 2 && count($cuenta)<$array[1]){
                $player = Player::find($player_id);
                $player->titular = $titular;
                $player->save();
                
                return redirect('edit_team');

            }elseif($player_position == 3 && count($cuenta)<$array[2]){
                $player = Player::find($player_id);
                $player->titular = $titular;
                $player->save();

                return redirect('edit_team');

            }elseif($player_position == 4    && count($cuenta)<$array[3]){
                $player = Player::find($player_id);
                $player->titular = $titular;
                $player->save();

                return redirect('edit_team');

            }
            
         }


         return Redirect::to('edit_team/')->with('alertas', 'Maximo de jugadores titulares alcanzado');

        //  $sessionManager->flash('mensaje', 'Este es el mensaje');

        //  return view('team.edit_team');

            // $error ="Maximo de jugadores titulares alcanzado";
            // return redirect('edit_team',compact ('error') );
            // return view ( 'team.edit_team', compact ('players') );



    }

    
}
