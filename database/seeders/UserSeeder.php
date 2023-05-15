<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $csvFile = fopen(base_path("database/csv/user1.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 800, ";")) !== FALSE) {
            if (!$firstline) {
                User::create([
                    'id_user' => $data['0'],
                    'name' => $data['1'],
                    'function' => $data['2'],
                    'function_en' => $data['3'],
                    'level' => $data['4'],
                    'password' => Hash::make($data['5'])
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
//Perintah terminal: php artisan db:seed --class=UserSeeder