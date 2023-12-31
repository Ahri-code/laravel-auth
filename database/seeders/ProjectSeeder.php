<?php

namespace Database\Seeders;

use App\Models\project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) { 
            $project = new project();
            $project->name = $faker->sentence(2);
            $project->description = $faker->text(500);
            $project->image = $faker->imageUrl(640, 480, 'animals', true);
            $project->save();
        }
    }
}
