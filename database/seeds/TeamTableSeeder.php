<?php

use App\Team;
use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create ( [
            'name' => 'Real Madrid'
        ]);

        Team::create ( [
            'name' => 'Atlético'
        ]);

        Team::create ( [
            'name' => 'Athletic'
        ]);

        Team::create ( [
            'name' => 'Granada'
        ]);

        Team::create ( [
            'name' => 'Barcelona'
        ]);

        Team::create ( [
            'name' => 'Sevilla'
        ]);

        Team::create ( [
            'name' => 'Villarreal'
        ]);

        Team::create ( [
            'name' => 'Betis'
        ]);

        Team::create ( [
            'name' => 'Valencia'
        ]);

        Team::create ( [
            'name' => 'Celta'
        ]);
    }
}
