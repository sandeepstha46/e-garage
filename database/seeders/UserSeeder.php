<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(10)
            ->create();

        User::insert([
            'name' => Str::random(5),
            'email' => Str::random(5) . '.gmail.com',
            'password' => Hash::make('password'),
            'status' => 2,
            "utype" => 'USR'
        ]);

        
    }
}
