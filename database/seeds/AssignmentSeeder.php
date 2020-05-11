<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Assignment;
class AssignmentSeeder extends Seeder
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
            foreach (range(1, 15) as $index) {
                Assignment::create([
                    'course_id' => rand(1, 28),
                    'teacher_id' => rand(1, 25),
                    'name' => $faker->randomElement([
                        'English on the workfloor',
                        'German on the workfloor',
                        'Professional Chinese greetings',
                        'Corona nowadays',
                        'Water management in Dubai',
                        'IT globally',
                    ]),
                    'subject' => $faker->name,
                    'isHidden' => false,
                    'isLocked' => false,
                    'createdBy' => $faker->name,


                ]);


            }
        }
    }
}
