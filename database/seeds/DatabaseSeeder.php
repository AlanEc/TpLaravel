<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->line('▶ Seeding database ...');
        // we disable the secondary keys verifications
        Model::unguard();
        $this->call(UsersTableSeeder::class);
        $this->call(RestaurantsTableSeeder::class);
        $this->call(DishesTableSeeder::class);
        // we enable the secondary keys verifications
        Model::reguard();
        $this->command->info('✔ Seed successfull');
    }
}
