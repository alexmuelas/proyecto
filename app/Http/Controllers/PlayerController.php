<?php

namespace App\Http\Controllers;

use App\Team;
use App\User;
use App\Packs;
use App\Player;
use App\Position;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware(['auth','verified']);
    }
    
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
        $this->validate($request, [
            'name' => 'required | min:3 | max:200',
            'initial_value' => 'numeric|required|min:0|max:99999999',
            'dorsal' => 'numeric|required|min:0|max:99',
            'points' => 'numeric|required|min:0|max:99',

            
        
            ]);

            $players = new Player();
            $players->name = $request->input('name');
            $players->id_user = $request->input('owner');
            $players->id_team = $request->input('team');
            $players->num_dorsal = $request->input('dorsal');
            $players->valor_inicial = $request->input('initial_value');
            $players->id_position = $request->input('position');
            $players->points = $request->input('points');

            $players->save();
            return redirect('/player');
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
        $players = Player::findOrFail($id);
        $players->delete();

        return redirect('/player');
    }

    public function addmoney ()
    {
        $packs = Packs::all();
        return view ('money.add', compact('packs'));
    }

    public function table_player()
    {
        
        // $players = Player::paginate(10);

        $players = Player::All();

        return view ( 'player.table', compact ('players') );
    }

    public function new_player(){

        $owners = User::all();
        $teams = Team::all();
        $positions = Position::all();


        return view ('player.new_player', compact('owners','teams','positions'));
        
    }

    public function edit_player(Player $player){
        $owners = User::all();
        $teams = Team::all();
        $positions = Position::all();

        return view('player.edit_player', compact('player','owners','teams','positions'));

        // return view ('user.edit');
    }
    
    public function update_player(Request $request, Player $player)
    {
        // dd($request);
        $this->validate($request, [
            'name' => 'required | min:3 | max:200',
            'dorsal' => 'numeric|required|min:0|max:99',
            'initial_value' => 'numeric|required|min:0|max:99999999',
          
        ], [



        ]);
        
        $player->name = $request->input('name');
        $player->id_user = $request->input('owner');
        $player->id_team = $request->input('team');
        $player->num_dorsal = $request->input('dorsal');
        $player->valor_inicial = $request->input('initial_value');
        $player->points = $request->input('points');
        $player->id_position = $request->input('position');

        $player->save();

        return redirect('player')->with('status', 'Profile updated!');
    }


    public function goals(Request $request, Player $player)
    {
        $cantidad = $request->quantity;

        $id = $request->user_id;

                $player = Player::find($id);

                $player->goals = $cantidad;
                //dd($request);
                $player->save();

            return redirect('player');


    }

    public function deletegoals()
    {
        

        $players = Player::All();

        foreach($players as $player){

        $player->goals = '0';
        $player->save();

        }

        return view ( 'player.table', compact ('players') );
    }

    public function addpoints()
    {
        

        $players = Player::All();

        foreach($players as $player){

            if($player->goals == '1'){
                $player->points = ($player->goals)*10;
                $player->save();
 

            }elseif($player->goals > '1'){
                $player->points = ($player->goals)*15;
                $player->save();
            }elseif($player->titular == '1'){
                $player->points += 5;
                $player->save();
            }

        }

            //Cuento el total de usuarios
            $users = User::All();

            $totaluser = count($users);
            
            
            //Le hago un for con el count, buscando los jugadores de la misma ID
            for($i=1; $i<($totaluser+1); $i++){
                $player_user = 0;
                $player_user = Player::All()->Where('id_user', ($i));

                $total_player_user = count($player_user);          

               if($total_player_user>0){
                $points_total = 0;
               
                foreach($player_user as $player_user2){

                    $points_total = $player_user2->points + $points_total;
            
                    }

                $users[($i)] -> points_myteam = $points_total;
                $users[($i)]-> save();

            }

            }

        

        return view ( 'player.table', compact ('players') );
    }
}
