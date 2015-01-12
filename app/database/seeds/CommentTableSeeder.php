<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 07.01.2015
 * Time: 0:34
 */

class CommentTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 30; $i++) {
            $comment = new Comment;
            $comment->author = $faker->name;
            $comment->body = $faker->text;
            $comment->article_id = $i % 20 + 1;

            $comment->save();
        }
    }
} 