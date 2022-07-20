<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;




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

        // ========================== AUTOSHOPS ==========================
        foreach (range(1, 10) as $_) {
            DB::table('autoshops')->insert([
                'name' => $faker->firstNameMale . ' ' . $faker->lastNameMale,
                'address' => $faker->address,
                'phone_nr' => $faker->phoneNumber,
            ]);
        }


        // ========================== USERS ==========================

        DB::table('users')->insert([
            'name' => 'Auto',
            'email' => 'auto@gmail.com',
            'password' => Hash::make('123'),
            // 'role' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            // 'role' => 10,
        ]);

        DB::table('users')->insert([
            'name' => 'Gytis Leonavicius',
            'email' => 'leogytis@gmail.com',
            'password' => Hash::make('123'),
            // 'role' => 10,
        ]);
    }
}
