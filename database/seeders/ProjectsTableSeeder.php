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
        $techWords = ['AI', 'Cloud', 'Smart', 'Data', 'App', 'Engine', 'Tech', 'System', 'Network', 'Cyber', 'Platform', 'Web'];

        for ($i = 0; $i < 5; $i++) {

            $word1 = $faker->randomElement($techWords);
            $word2 = ucfirst($faker->words(1, true));

            $newProject = new Project();

            $newProject->name = "$word1 $word2";
            $newProject->customer = $faker->name();
            $newProject->period = $faker->monthName . ' ' . $faker->numberBetween(2023, 2025);
            $newProject->summary = $faker->paragraph();
            $newProject->type_id = rand(1, 4);


            $newProject->save();
        }
    }
}
