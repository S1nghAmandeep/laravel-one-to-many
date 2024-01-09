<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {

            $new_Project = new Project();
            $new_Project->title = $faker->name();
            $new_Project->link_project = $faker->url();
            $new_Project->language = $faker->randomElement(['html', 'css', 'javascript', 'php']);
            $new_Project->description = $faker->sentence();

            $new_Project->save();
        }
    }
}
