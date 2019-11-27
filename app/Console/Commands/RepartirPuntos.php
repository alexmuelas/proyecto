<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Puja; 
use App\Player;

class RepartirPuntos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'repartir:puntos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $pujas = Puja::All();

        if(count($pujas) == 0){
           // dd(count($pujas));

           $player_NoID = Player::Where('id_user', Null)->Where('id_position', '1')->get()->random(10);

           for ($i = 0; $i < count($player_NoID); $i++) {
   
            $players = new Puja();

            $players ->id_player = $player_NoID[$i]->id;
            $players ->name_player = $player_NoID[$i]->name;
            $players ->id_position = $player_NoID[$i]->id_position;
            $players ->money_puja = $player_NoID[$i]->valor_inicial;
   
            $players->save();
           }

           $player_NoID = Player::Where('id_user', Null)->Where('id_position', '2')->get()->random(20);

           for ($i = 0; $i < count($player_NoID); $i++) {
   
            $players = new Puja();

            $players ->id_player = $player_NoID[$i]->id;
            $players ->name_player = $player_NoID[$i]->name;
            $players ->id_position = $player_NoID[$i]->id_position;
            $players ->money_puja = $player_NoID[$i]->valor_inicial;
   
            $players->save();
           }


           $player_NoID = Player::Where('id_user', Null)->Where('id_position', '3')->get()->random(15);

           for ($i = 0; $i < count($player_NoID); $i++) {
   
            $players = new Puja();

            $players ->id_player = $player_NoID[$i]->id;
            $players ->name_player = $player_NoID[$i]->name;
            $players ->id_position = $player_NoID[$i]->id_position;
            $players ->money_puja = $player_NoID[$i]->valor_inicial;
   
            $players->save();
           }

           $player_NoID = Player::Where('id_user', Null)->Where('id_position', '4')->get()->random(15);

           for ($i = 0; $i < count($player_NoID); $i++) {
   
            $players = new Puja();

            $players ->id_player = $player_NoID[$i]->id;
            $players ->name_player = $player_NoID[$i]->name;
            $players ->id_position = $player_NoID[$i]->id_position;
            $players ->money_puja = $player_NoID[$i]->valor_inicial;
   
            $players->save();
           }

        }

        $this->info('Tarea completada con exito');

    }
}
