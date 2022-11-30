<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Le Nhan',
            'email' => 'nhanboyll@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => str_random(10), 
        ]);
    }
}
