<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Factory as Faker;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
*/
public function run()
{
    $faker = Faker::create();
    foreach (range(1,75) as $index) {
        Student::create([
            'user_id' => $index,
            'course_id' => rand(1,28),
            'score' => rand(1,300),
        ]);
    }
}
}
