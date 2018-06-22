<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RestaurantsTableSeeder extends Seeder
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
        foreach (range(1, 50) as $index) {
            DB::table('restaurants')->insert([
                'name'          => $faker->name,
                'description'   => $faker->sentence(3),
                'address'       => $faker->address,
                'phone_number'  => $faker->e164phoneNumber,
                'rating'        => $faker->numberBetween(0, 5),
                'image'         => $faker->imageUrl(400,200, 'food'),
                'created_at'    => $faker->dateTime($max = 'now')
            ]);
        }
    }
}
