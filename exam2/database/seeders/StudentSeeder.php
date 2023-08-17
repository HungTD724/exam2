<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i=0; $i<50; $i++){
            Student::create([
                'name' => $faker->name(),
                'date_of_birth' =>$faker->date(),
                'yearEnrolled' =>$faker->year(),
            ]);
        }
    }
}
