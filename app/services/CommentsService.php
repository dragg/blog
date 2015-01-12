<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 07.01.2015
 * Time: 1:02
 */

class CommentsService
{
    public function add($article_id, $author, $body)
    {
        $comment = new Comment;
        $comment->article_id = $article_id;
        $comment->author = $author;
        $comment->body = $body;
        $comment->save();

        return $comment->id;
    }
} 