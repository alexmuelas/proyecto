<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\User; 
use App\Player;
use DateTime;

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

                $users[($i-1)] -> points_myteam += $points_total;
                $users[($i-1)]-> save();

            }

            }

            $time = time();


            $file = fopen(('public/log_puntos.txt'), "a");
    
            fwrite($file, 'Puntos repartidos con exito' . date("d-m-Y (H:i:s)", $time) . PHP_EOL);
    
    
            fclose($file);
    
            //$this->info('Puntos repartidos con exito');

    }
}
