<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Satrio',
            'email' => 'admin@satrio.com',
            'password' => bcrypt('coba1234')
        ]);
    }
}
