<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
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
        $faker = Faker::create('lt_LT');

        // ========================== COLORS ==========================

        $color = ['greenyellow', 'skyblue', 'goldenrod'];

        DB::table('colors')->insert([
            'name' => 'darkseagreen',
        ]);

        DB::table('colors')->insert([
            'name' => 'khaki',
        ]);

        DB::table('colors')->insert([
            'name' => 'moccasin',
        ]);
        DB::table('colors')->insert([
            'name' => 'honeydew',
        ]);

        // ========================== CLIENTS ==========================

        $name = ['Jonas', 'Petras', 'Jurgis', 'Antanas', 'Tomas', 'Romas'];
        $surname = ['Jonaitis', 'Petraitis', 'Jurgaitis', 'Antanaitis', 'Tomaitis', 'Romaitis'];

        foreach (range(1, 10) as $_) {
            $social_id = rand(3, 4) . rand(0, 99) . sprintf("%02d", rand(1, 12)) . sprintf("%02d", rand(1, 31)) . rand(0000, 9999);

            DB::table('clients')->insert([
                'name' => $faker->firstNameMale,
                'surname' => $surname[rand(0, count($surname) - 1)],
                'funds' => rand(0, 10000),
                'account_nr' => $faker->iban('LT'),
                'social_id' => $social_id,
                'created_at' => date('Y-m-d H:i:s'),
                'color_id' => rand(1, 4),
            ]);
        }

        // ========================== USERS ==========================

        DB::table('users')->insert([
            'name' => 'Mu Mu',
            'email' => 'mumu@gmail.com',
            'password' => Hash::make('123'),
            'role' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'role' => 10,
        ]);

        DB::table('users')->insert([
            'name' => 'Gytis Leonavicius',
            'email' => 'leogytis@gmail.com',
            'password' => Hash::make('123'),
            'role' => 10,
        ]);
    }
}
