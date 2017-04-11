<?php

use Illuminate\Database\Seeder;
use App\Phone;
use Faker\Factory as Faker;

class PhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->truncate();

        $faker = Faker::create();

        foreach (range(1, 30) as $i) {
            Phone::create([
                'description' => $faker->sentence(),
                'phone'       => $faker->numerify('####-####')
            ]);
        }
    }
}
