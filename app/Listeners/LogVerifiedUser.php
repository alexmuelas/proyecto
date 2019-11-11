<?php

namespace App\Listeners;

use App\User;
use App\Player;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogVerifiedUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $id= Auth::user()->id;

        $player_NoID = Player::Where('id_user', Null)->Where('id_position', '1')->get()->random(2);

        for ($i = 0; $i < count($player_NoID); $i++) {

        $player_NoID[$i] ->id_user = $id;

        $player_NoID[$i]->save();
        }

        $player_NoID = Player::Where('id_user', Null)->Where('id_position', '2')->get()->random(3);

        for ($i = 0; $i < count($player_NoID); $i++) {

        $player_NoID[$i] ->id_user = $id;

        $player_NoID[$i]->save();
        }

        $player_NoID = Player::Where('id_user', Null)->Where('id_position', '3')->get()->random(4);

        for ($i = 0; $i < count($player_NoID); $i++) {

        $player_NoID[$i] ->id_user = $id;

        $player_NoID[$i]->save();
        }

        $player_NoID = Player::Where('id_user', Null)->Where('id_position', '4')->get()->random(5);

        for ($i = 0; $i < count($player_NoID); $i++) {

        $player_NoID[$i] ->id_user = $id;

        $player_NoID[$i]->save();

        }


        // $user = User::findOrFail($id);
        
        // $user->name = $request->input('name');



       // dd($player_NoID);
    }

    /**
     * Handle the event.
     *
     * @param  Verified  $event
     * @return void
     */
    public function handle(Verified $event)
    {
        //
    }
}
