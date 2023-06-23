<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'username' => 'mahasiswa',
            'password' => hash::make('pnchebat'),
            'role' => 'mahasiswa',
            // 'remember_token' => Str::random(60)
        ]);
    }
}
