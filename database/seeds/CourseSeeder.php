<?php

use Illuminate\Database\Seeder;
use App\Course;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create(['name' => 'Accountancy Associate degree',]);
        Course::create(['name' => 'Aquacultuur',]);
        Course::create(['name' => 'Bedrijfskunde',]);
        Course::create(['name' => 'Bouwkunde',]);
        Course::create(['name' => 'Chemie',]);
        Course::create(['name' => 'Civiele Techniek',]);
        Course::create(['name' => 'Commerciële Economie',]);
        Course::create(['name' => 'Communicatie',]);
        Course::create(['name' => 'Ecotoxicologie',]);
        Course::create(['name' => 'Engineering',]);
        Course::create(['name' => 'Finance & Control (Bedrijfseconomie)',]);
        Course::create(['name' => 'HBO-ICT',]);
        Course::create(['name' => 'Human Resource Management',]);
        Course::create(['name' => 'International Business',]);
        Course::create(['name' => 'Leraar Basisonderwijs',]);
        Course::create(['name' => 'Logistics Engineering',]);
        Course::create(['name' => 'Maritiem Officier',]);
        Course::create(['name' => 'Pedagogiek',]);
        Course::create(['name' => 'River Delta Development (MSc)',]);
        Course::create(['name' => 'Social Work',]);
        Course::create(['name' => 'Sportkunde',]);
        Course::create(['name' => 'Technische Bedrijfskunde',]);
        Course::create(['name' => 'Tourism Management',]);
        Course::create(['name' => 'Vakbekwaamheid bewegingsonderwijs',]);
        Course::create(['name' => 'Vakspecialist Muziek',]);
        Course::create(['name' => 'Verpleegkunde',]);
        Course::create(['name' => 'Verloskunde',]);
        Course::create(['name' => 'Watermanagement',]);
    }
}
