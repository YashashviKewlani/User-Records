<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usermaster;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i < 21; $i++) {
            $user = new Usermaster;
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->gender = "M";
            $user->address = $faker->address;
            $user->state = $faker->state;
            $user->country = $faker->country;
            $user->dob = $faker->date;
            $user->password = $faker->password;
            $user->save();
        }
    }
}
