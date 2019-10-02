<?php

use App\Packs;
use Illuminate\Database\Seeder;

class PacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Packs::create ( [
            'name' => 'normal',
            'logo' => 'home',
            'price' => '9.99',
            'money' => '100000'
        ]);

        Packs::create ( [
            'name' => 'estandar',
            'logo' => 'business',
            'price' => '29.99',
            'money' => '1000000'
        ]);

        Packs::create ( [
            'name' => 'premiun',
            'logo' => 'account_balance',
            'price' => '99.99',
            'money' => '10000000'
        ]);
    }
}
