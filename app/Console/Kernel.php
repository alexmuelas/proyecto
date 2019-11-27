<?php

namespace App\Console;

use App\Puja; 
use App\Player;
use Illuminate\Support\Facades\DB;


use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //'AppConsoleCommandsHappyBirthday'
        \App\Console\Commands\HappyBirthday::class,
        \App\Console\Commands\RepartirPuntos::class,
        \App\Console\Commands\Bid::class

    ];

    /**
     * Define the application's command schedule.
     *FRAN MARIQUITA
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

       // $schedule->command('jugadores:puja')->everyMinute();
       $schedule->command('repartir:puntos')->everyMinute();
       $schedule->command('jugadores:puja')->everyMinute();


        // $schedule->command('inspire')
        //          ->hourly();


        // $schedule->call(function () {

            // $pujas = Puja::All();

            // if(count($pujas) == 0){
            //    // dd(count($pujas));

            //    $player_NoID = Player::Where('id_user', Null)->Where('id_position', '1')->get()->random(10);

            //    for ($i = 0; $i < count($player_NoID); $i++) {
       
            //     $players = new Puja();

            //     $players ->id_player = $player_NoID[$i]->id;
            //     $players ->name_player = $player_NoID[$i]->name;
            //     $players ->id_position = $player_NoID[$i]->id_position;
            //     $players ->money_puja = $player_NoID[$i]->valor_inicial;
       
            //     $players->save();
            //    }

            //    $player_NoID = Player::Where('id_user', Null)->Where('id_position', '2')->get()->random(20);

            //    for ($i = 0; $i < count($player_NoID); $i++) {
       
            //     $players = new Puja();

            //     $players ->id_player = $player_NoID[$i]->id;
            //     $players ->name_player = $player_NoID[$i]->name;
            //     $players ->id_position = $player_NoID[$i]->id_position;
            //     $players ->money_puja = $player_NoID[$i]->valor_inicial;
       
            //     $players->save();
            //    }


            //    $player_NoID = Player::Where('id_user', Null)->Where('id_position', '3')->get()->random(15);

            //    for ($i = 0; $i < count($player_NoID); $i++) {
       
            //     $players = new Puja();

            //     $players ->id_player = $player_NoID[$i]->id;
            //     $players ->name_player = $player_NoID[$i]->name;
            //     $players ->id_position = $player_NoID[$i]->id_position;
            //     $players ->money_puja = $player_NoID[$i]->valor_inicial;
       
            //     $players->save();
            //    }

            //    $player_NoID = Player::Where('id_user', Null)->Where('id_position', '4')->get()->random(15);

            //    for ($i = 0; $i < count($player_NoID); $i++) {
       
            //     $players = new Puja();

            //     $players ->id_player = $player_NoID[$i]->id;
            //     $players ->name_player = $player_NoID[$i]->name;
            //     $players ->id_position = $player_NoID[$i]->id_position;
            //     $players ->money_puja = $player_NoID[$i]->valor_inicial;
       
            //     $players->save();
            //    }

            // }

           

            //DB::table('pujas')->delete();
        // })->everyMinute();

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
