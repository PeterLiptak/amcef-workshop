<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach ((range(1, 10)) as $index) {
            DB::table('posts')->insert(
                [
                    'title' => 'Post' . $index,
                    'body' => $faker->text,
                    'created_at' => $faker->dateTimeBetween($startDate = '-2 months', $endDate = 'now')
                ]
            );
        }
    }
}
