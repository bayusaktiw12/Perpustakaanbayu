<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // ANGGOTA
        User::create([
            'name' => 'Anggota',
            'email' => 'anggota@gmail.com',
            'role' => 'anggota',
            'password' => Hash::make('12345678'),
        ]);
    }
}