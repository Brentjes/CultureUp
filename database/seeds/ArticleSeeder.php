<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        {
            foreach (range(1, 50) as $index) {
                Article::create([
                    'user_id' => rand(1, 30),
                    'title' => $faker->name,
                    'excerpt' => $faker->sentence,
                    'text' => $faker->text,
                ]);
            }
        }
    }
}
