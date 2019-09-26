<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create ( [
            'name' => 'alex',
            'email' => 'alex@email.com',
            'user_name' => 'alex',
            'password' => bcrypt ( '123456' ),
            'money' => '999999999',
            'admin' => true
        ]);

        factory ( User::class, 50 )->create ();
    }
}
