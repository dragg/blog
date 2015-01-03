<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 31.12.2014
 * Time: 16:59
 */

class ArticleTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            $article = new Article;
            $article->title = $faker->name;
            $article->body = $faker->text;
            $article->project_id = $i % 3 + 1;

            $article->save();
        }
    }
} 