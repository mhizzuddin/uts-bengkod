<?php

namespace Database\Seeders;

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'nama' => 'Zufar',
            'no_hp' => '08123456789',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'dokter',
        ]);

        User::create([
            'nama' => 'Zupar',
            'no_hp' => '08184436789',
            'email' => 'admin1@example.com',
            'password' => Hash::make('password'),
            'role' => 'dokter',
        ]);

        User::create([
            'nama' => 'Balqis',
            'no_hp' => '08123999788',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
        ]);
        User::create([
            'nama' => 'Zeuir',
            'no_hp' => '08199446789',
            'email' => 'adminzee@example.com',
            'password' => Hash::make('password'),
            'role' => 'dokter',
        ]);

        User::create([
            'nama' => 'Brufi',
            'no_hp' => '08123456788',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
        ]);
    }
}
