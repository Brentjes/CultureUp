<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\StudentAssignment;
class StudentAssignmentSeeder extends Seeder
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
            foreach (range(1, 150) as $index) {
                StudentAssignment::create([
                    'student_id' => rand(1,75),
                    'assignment_id' => rand(1,15),
                    'progress' => rand(1,10),
                ]);
            }
        }
    }
}
