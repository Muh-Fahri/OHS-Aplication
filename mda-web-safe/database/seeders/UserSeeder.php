<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'pitti',
            'email' => 'fahri@example.com',
            'role' => 'user',
            'password' => bcrypt('fahri12345')
        ]);

        User::create([
            'name' => 'Fahri',
            'email' => 'fajri@example.com',
            'role'=> 'user',
            'password' => bcrypt('fahri123'),
        ]);
    }
}
