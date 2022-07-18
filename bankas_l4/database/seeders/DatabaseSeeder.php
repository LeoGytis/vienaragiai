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
        $faker = Faker::create();

        $name = ['Jonas', 'Petras', 'Jurgis', 'Antanas', 'Tomas', 'Romas'];
        $surname = ['Jonaitis', 'Petraitis', 'Jurgaitis', 'Antanaitis', 'Tomaitis', 'Romaitis'];

        foreach (range(1, 10) as $_) {
            $social_id = rand(3, 4) . rand(0, 99) . sprintf("%02d", rand(1, 12)) . sprintf("%02d", rand(1, 31)) . rand(0000, 9999);

            DB::table('clients')->insert([
                'name' => $name[rand(0, count($name) - 1)],
                'surname' => $surname[rand(0, count($surname) - 1)],
                'funds' => rand(0, 10000),
                'account_nr' => $faker->iban('LT'),
                'social_id' => $social_id,
            ]);
        }

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
