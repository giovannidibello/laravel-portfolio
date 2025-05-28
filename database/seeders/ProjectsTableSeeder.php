<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 5; $i++) {

            $newProject = new Project();

            $newProject->name = $faker->words(2, true);
            $newProject->customer = $faker->name();
            $newProject->period = $faker->monthName();
            $newProject->summary = $faker->paragraph();
            $newProject->type_id = rand(1, 4);


            $newProject->save();
        }
    }
}
