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
        User::updateOrCreate(['id' => 1],[
            'name'      => 'Errol John',
            'email'     => 'erroljohncaneda@gmail.com',
            'password'  => '$2y$10$15.OsHzP1Sp2Ks2.xyGtjOdCbk3TA.rTzMv0AMVbdpFbd3LmkZntS'
        ]);
    }
}
