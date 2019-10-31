<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packs;
use App\Player;
use App\Team;
use App\User;

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
            $players->position = $request->input('position');
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

        return view ('player.new_player', compact('owners','teams'));
        
    }
    
}
