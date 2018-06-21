<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // ==============================================================================
        // CREATE "REAL" USERS FOR DAY TO DAY DEVELOPMENT
        // ==============================================================================
        DB::table('users')->insert([
            'name'       => 'Antoine Marchais',
            'email'      => 'antoinemarchais@orange.fr',
            'password'   => bcrypt('password'),
            'created_at' => $faker->dateTime($max = 'now'),
            'updated_at' => $faker->dateTime($max = 'now'),
        ]);

        DB::table('users')->insert([
            'name'       => 'Alan Ecalle',
            'email'      => 'alan.ecalle@imie.fr',
            'password'   => bcrypt('password'),
            'created_at' => $faker->dateTime($max = 'now'),
            'updated_at' => $faker->dateTime($max = 'now'),
        ]);

        // ==============================================================================
        // CREATE DUMMY USERS FOR TESTING
        // ==============================================================================
        foreach (range(1, 150) as $index) {
            DB::table('users')->insert([
                'name'       => $faker->name,
                'email'      => $faker->email,
                'password'   => bcrypt('password'),
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now'),
            ]);
        }
    }
}
