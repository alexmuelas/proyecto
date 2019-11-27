<?php

namespace App\Console\Commands;

use App\Player;
use Illuminate\Console\Command;
use App\Puja;
use Illuminate\Http\Request;


class Bid extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jugadores:puja';

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

           $this->rellenar_tabla();

        }else{
            $tabla_puja = Puja::whereNotNull('id_comprador')->get();
            foreach($tabla_puja as $jugador){

                $player= Player::where('id',$jugador->id_player)->first();


                //$player->name = $request->input('name');
                $player->id_user = $jugador->id_comprador;
               // $player->id_team = $user;
                //$player->num_dorsal = $request->input('dorsal');
                $player->valor_inicial = $jugador->money_puja;
                //$player->points = $request->input('points');
                //$player->id_position = $request->input('position');

                $player->save();
            }

            $vaciar_puja = Puja::truncate();

            $time = time();


            $file = fopen(('public/log_puja.txt'), "a");
    
            fwrite($file, 'Vaciado tabla puja con exito --' . date("d-m-Y (H:i:s)", $time) . PHP_EOL);
    
    
            fclose($file);

            $this->rellenar_tabla();

            
           // dd ($tabla_puja);
        }

        

        $this->info('Tarea completada con exito');

    }

    public function rellenar_tabla(){
        
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

        $time = time();


            $file = fopen(('public/log_puja.txt'), "a");
    
            fwrite($file, 'Relleno tabla puja con exito --' . date("d-m-Y (H:i:s)", $time) . PHP_EOL);
    
    
            fclose($file);
    }
}
