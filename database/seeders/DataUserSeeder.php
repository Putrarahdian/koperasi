<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DataUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
        'name' => 'Admin Koperasi',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('admin'),
        'role' => 'admin'
        ]);

        User::create([
        'name' => 'Bendahara Koperasi',
        'email' => 'bendahara@gmail.com',
        'password' => Hash::make('bendahara'),
        'role' => 'bendahara'
        ]);
    }
}
