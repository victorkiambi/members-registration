<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         // Let's truncate our existing records to start from scratch.
        //  App\Members::truncate();

         $faker = \Faker\Factory::create();
 
         // And now, let's create a few articles in our database:
         for ($i = 0; $i < 10; $i++) {
             App\Members::create([
                 'contact' => $faker->randomNumber($nbDigits = NULL, $strict = false),
                 'id'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
                 'names' => $faker->name,
                 'dob' => $faker->dateTimeBetween('1990-01-01', '2012-12-31'),
                 'district' => $faker->word,
                 'guardian' => $faker->name,
                 'guardian_contact' => $faker->randomNumber($nbDigits = NULL, $strict = false),
                 'photo' => $faker->imageUrl($width = 640, $height = 480),
                 'full_member' => $faker->boolean($chanceOfGettingTrue = 50),
                 'admitted' => $faker->boolean($chanceOfGettingTrue = 50),
                 'commissioned' => $faker->boolean($chanceOfGettingTrue = 50),
                 
             ]);
         }
    }
}
