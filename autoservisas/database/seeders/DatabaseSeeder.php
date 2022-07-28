<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

use function Symfony\Component\String\s;

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
        // $faker->addProvider(new Bluemmb\Faker\PicsumPhotosProvider($faker));

        // ========================== AUTOSHOPS ==========================
        foreach (range(1, 10) as $_) {
            DB::table('autoshops')->insert([
                'name' => $faker->company,
                'address' => $faker->address,
                'phone_nr' => $faker->phoneNumber,
            ]);
        }

        // ========================== MECHANICS ==========================
        foreach (range(1, 10) as $_) {

            $photopath = 'http://localhost/vienaragiai/autoservisas/public/images/mech';

            DB::table('mechanics')->insert([
                'name' => $faker->firstNameMale,
                'surname' => $faker->lastNameMale,
                'photo' => $photopath . rand(1,9) . '.jpg',
                'rating' => rand(1, 10),
                'autoshop_id' => rand(1, 10),
            ]);
        }

        // ========================== SERVICES ==========================
        foreach (range(1, 10) as $_) {
            $services = ['Tires change', 'Oil/Fluid Leak Inspection', 'Battery diagnostic', 'Break pad replacement', 'Car belt change', 'Vacuum Pump Repair', 'Speedometer Cable Repair', 'Endgine diagnostic', 'Paint job', 'Cooling System Flush', 'Fuel Pump Replacement'];

            DB::table('services')->insert([
                'name' => $services[rand(0, count($services) - 1)],
                'time' => rand(10, 120),
                'price' => rand(20, 200),
                'mechanic_id' => rand(1, 10),
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
