<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'id_user' => '012345',
            'name' => 'Admin',
            'role' => 'admin',
            'hp' => '-',
            'password' => Hash::make('admin123'),
            'function' => '7',
            'function_en' => '7',
            'level' => 1
        ]);
    }
}
