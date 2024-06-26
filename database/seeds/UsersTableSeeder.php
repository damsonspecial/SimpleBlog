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
        User::truncate();

        User::create([
            'name'     => 'damson special',
            'email'    => 'damsonspecial@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);
    }
}
