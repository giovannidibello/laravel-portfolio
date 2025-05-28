<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // utilizzo i seeder per la tabella Types e Projects 
        $this->call([
            TypesTableSeeder::class,
            ProjectsTableSeeder::class
        ]);
    }
}
