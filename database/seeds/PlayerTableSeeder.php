<?php

use App\Player;
use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {

            for ($j = 1; $j <= 3; $j++) {

                factory ( Player::class, 1 )->create ([
                    'id_team' => $i,
                    'num_dorsal' => $j,
                    'position' => 'Portero'

                ]);
            }

            for ($j = 4; $j <= 10; $j++) {

                factory ( Player::class, 1 )->create ([
                    'id_team' => $i,
                    'num_dorsal' => $j,
                    'position' => 'Delantero'

                ]);
            }

            for ($j = 11; $j <= 17; $j++) {

                factory ( Player::class, 1 )->create ([
                    'id_team' => $i,
                    'num_dorsal' => $j,
                    'position' => 'Centrocampista'

                ]);
            }

            for ($j = 18; $j <= 25; $j++) {

            factory ( Player::class, 1 )->create ([
                'id_team' => $i,
                'num_dorsal' => $j,
                'position' => 'Defensa'

            ]);
            }
        }

    }
}
