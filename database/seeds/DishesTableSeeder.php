<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DishesTableSeeder extends Seeder
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
            DB::table('dishes')->insert([
                'name'          => $faker->sentence(3),
                'description'   => $faker->realText($faker->numberBetween(100, 255)),
                'price'         => $faker->address,
                'image'         => $faker->imageUrl(400,200),
                'created_at'    => $faker->dateTime($max = 'now')
            ]);
        }
    }
}
