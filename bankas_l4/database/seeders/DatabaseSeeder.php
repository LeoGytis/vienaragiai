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
            DB::table('clients')->insert([
                'name' => $faker->firstNameMale,
                'surname' => $faker->lastName,
                'funds' => rand(0, 10000),
                'account_nr' => $faker->iban('LT'),
                'social_id' => rand(3, 4) . rand(0, 99) . rand(0, 12318888),
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
