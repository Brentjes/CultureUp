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
                    'country_id' => rand(1, 244),
                    'name' => $faker->randomElement([
                        'Starting a business in India',
                        'Gender equality in Denmark',
                        'Work/Life balance in Sweden',
                        'Paris vs London: Business and cultural differences',
                        'Cultural New Year Celebrations',
                        'Silence Across Cultures',
                        'Greetings Matter: Handshakes Are Not Always Acceptable',
                        'Talking Politics',
                        'Personal Space Expectations',
                        'Hierarchy in the organisations',
                        'Personal style: Informal or formal?',
                        'Impact of culture on risk taking',
                        'Ethical standards in the workplace',
                        'Education and intellectual pursuits',
                        'Open-mindedness: receptivity to new ideas',
                        'Diversity challenges you may face'
                    ]),
                    'subject' => $faker->realText(50),
                    'isHidden' => false,
                    'isLocked' => false,
                    'createdBy' => $faker->name,


                ]);


            }
        }
    }
}
