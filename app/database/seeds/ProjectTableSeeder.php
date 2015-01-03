<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 02.01.2015
 * Time: 1:03
 */

class ProjectTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 3; $i++) {
            $project = new Project;
            $project->title = $faker->name;
            $project->description = $faker->text;

            $project->save();
        }
    }
} 