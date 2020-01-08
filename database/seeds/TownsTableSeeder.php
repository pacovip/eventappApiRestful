<?php

use Illuminate\Database\Seeder;
use App\Town;

class TownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Town::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 1; $i <= 3; $i++) {
            Town::create([
                'city_id' => $i,
                'name' => 'Town '.$i,
                'description' => $faker->sentence,
            ]);
        }
    }
}
