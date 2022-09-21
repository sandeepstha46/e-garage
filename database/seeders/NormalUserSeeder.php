<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NormalUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::insert([
            'name' => Str::make('sandeep'),
            'email' => Str::make('sandeep') . '.gmail.com',
            'password' => Hash::make('1@E456789'),
            'status' => 2,
            "utype" => 'USR'
        ]);
    }
}
