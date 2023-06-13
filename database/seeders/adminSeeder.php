<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullname' => 'admin',
            'email' => 'super@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password123')
        ]);

        User::create([
            'fullname' => 'super user',
            'email' => 'superuser@gmail.com',
            'role' => 'superuser',
            'password' => Hash::make('password123')
        ]);
    }
}
