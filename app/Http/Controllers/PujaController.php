<?php

namespace App\Http\Controllers;

use App\Puja;
use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PujaController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware(['auth','verified']);
    }
    
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
        $this->validate($request, [
            // 'name' => 'required | min:3 | max:200',
            // 'initial_value' => 'numeric|required|min:0|max:99999999',
            // 'dorsal' => 'numeric|required|min:0|max:99',
            // 'points' => 'numeric|required|min:0|max:99',

            
        
            ]);

            $player = Player::get()->Where('name', ($request->player_name));

            foreach($player as $playe){

           //dd($playe->name);
            

            if($playe->valor_inicial < $request->money){

                $puja = new Puja();
                //$player = Player::find($id);
                $puja->id_player = $playe->id;
                //$puja->id_comprador = Auth::user()->id;
                $puja->id_vendedor = Auth::user()->id;
                $puja->name_player = $playe ->name;
                $puja->id_position = $playe ->id_position;
                $puja->money_puja = $request->money;
                //dd($request);
                  $puja->save();
      
                  return redirect('/pujas');
            }else{
                return redirect('/pujas')->with('alertas', 'Puja demasiado baja');
            }
        }
            
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

    public function table_pujas()
    {
        
        // $players = Player::paginate(10);

        $pujas = Puja::All();

        return view ( 'pujas.table', compact ('pujas') );
    }

    

    public function table_edit_bid()
    {
        
        // $players = Player::paginate(10);

        $pujas= Puja::where('id_comprador',Auth::user()->id)->get();


        return view ( 'pujas.edit', compact ('pujas') );
    }

    public function bid(Request $request, Puja $puja, Player $player)
    {
        $cantidad =$request->quantity;

        $id = $request->puja_id;

                $puja = Puja::findOrFail($id);
                //$player = Player::find($id);
                //$puja->id_player = $id;
                $puja->id_comprador = Auth::user()->id;
                //$puja->id_vendedor = $request->id_vendedor;
                //$puja->name_player = $request ->name_player;
                //$puja->id_position = $request ->id_position;
                $puja->money_puja = $cantidad;
                //dd($request);
                $puja->save();

                $id_player = $request->id_player;

                $player = Player::findOrFail($id_player);
                $player->valor_inicial = $cantidad;
                //dd($player);
                $player->save();

            return redirect('pujas');


    }

    public function new_puja(){

        
        $players = Player::All()->Where('id_user', Auth::user()->id);
      


        return view ('pujas.new_puja', compact('players'));
        
    }
}
