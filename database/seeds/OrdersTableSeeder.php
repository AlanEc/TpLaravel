<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder
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
        // CREATE DUMMY OFFERS FOR TESTING
        // ==============================================================================
        foreach (range(1, 150) as $index) {
            DB::table('orders')->insert([
                'quantity'      => $faker->randomDigit,
                'created_at'    => $faker->dateTime($max = 'now')
            ]);
        }
    }
}
