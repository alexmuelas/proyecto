<?php

namespace App\Http\Controllers;

use App\User;
use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
