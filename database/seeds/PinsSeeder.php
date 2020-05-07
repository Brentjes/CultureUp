<?php

use Illuminate\Database\Seeder;

class PinsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pins = [
            [
                "country" => "AD",
                "lat" => 42.546245,
                "long" => 1.601554,
                "name" => "Andorra"
            ],
            [
                "country" => "AE",
                "lat" => 23.424076,
                "long" => 53.847818,
                "name" => "United Arab Emirates"
            ],
            [
                "country" => "AF",
                "lat" => 33.93911,
                "long" => 67.709953,
                "name" => "Afghanistan"
            ],

        ];
    }
}
