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
            'id_user' => '800210',
            'name' => 'Anupam Agrawal',
            'email' => '800210@indorama.com',
            'hp' => '-',
            'password' => Hash::make('800210'),
            'function' => '1',
            'function_en' => '1',
            'level' => 1
        ]);

        User::create([
            'id_user' => '800194',
            'name' => 'Anil Ramotar Tibrewal',
            'email' => '800194@indorama.com',
            'hp' => '-',
            'password' => Hash::make('800194'),
            'function' => '3',
            'function_en' => '3',
            'level' => 1
        ]);

        User::create([
            'id_user' => '800253',
            'name' => 'Vinod Verghese Israel',
            'email' => '800253@indorama.com',
            'hp' => '-',
            'password' => Hash::make('800253'),
            'function' => '2',
            'function_en' => '2',
            'level' => 2

        ]);

        User::create([
            'id_user' => '800307',
            'name' => 'Shitij Mathur',
            'email' => '800307@indorama.com',
            'hp' => '-',
            'password' => Hash::make('800307'),
            'function' => '3',
            'function_en' => '3',
            'level' => 2

        ]);

        User::create([
            'id_user' => '590085',
            'name' => 'Anton Arilianto',
            'email' => '590085@indorama.com',
            'hp' => '-',
            'password' => Hash::make('590085'),
            'function' => '4',
            'function_en' => '4',
            'level' => 3
        ]);

        User::create([
            'id_user' => '202601',
            'name' => 'Neneng Nurjanah',
            'email' => '202601@indorama.com',
            'hp' => '-',
            'password' => Hash::make('202601'),
            'function' => '6',
            'function_en' => '6',
            'level' => 3
        ]);
    }
}
