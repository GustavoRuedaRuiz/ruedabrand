<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'email' => 'admin@test.com',
            'name' => 'SHREK',
            'surname'=>'pantano',
            'password' => Hash::make('12345678'),
        ])->assignRole('admin');

        User::create([
            'email' => 'user@test.com',
            'name' => 'ANUEL',
            'surname'=>'Br',
            'password' => Hash::make('12345678'),
        ])->assignRole('user');

    }

}
