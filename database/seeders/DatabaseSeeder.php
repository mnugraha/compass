<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        \App\Models\User::create([
            'id_user' => 'IND002',
            'name' => 'Stave Jobs',
            'email' => 'jobs@pei.ac.id',
            'password' => Hash::make('jobs'),
            'function' => '3',
            'level' => 2

        ]);
    }
}
