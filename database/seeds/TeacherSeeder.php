<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Teacher;
class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $faker = Faker::create();
            $i = 75;
            foreach (range(1, 25) as $index) {
                $i++;
                Teacher::create([
                    'user_id' => $i,
                ]);
            }
        }
    }
}
