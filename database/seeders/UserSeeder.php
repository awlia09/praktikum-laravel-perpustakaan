<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin Perpustakaan',
                'password' => Hash::make('password123'),
                'role' => 'admin',
            ]
        );

        // 2. Akun Petugas
        User::updateOrCreate(
            ['email' => 'petugas@example.com'],
            [
                'name' => 'Petugas Perpustakaan',
                'password' => Hash::make('password123'),
                'role' => 'petugas',
            ]
        );
    }
}