<?php

use App\Position;
use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create ( [
            'id' => '1',
            'name' => 'Portero'
        ]);
        Position::create ( [
            'id' => '2',
            'name' => 'Delantero'
        ]);
        Position::create ( [
            'id' => '3',
            'name' => 'Centrocampista'
        ]);
        Position::create ( [
            'id' => '4',
            'name' => 'Defensa'
        ]);

    }
}
