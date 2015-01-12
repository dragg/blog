<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 07.01.2015
 * Time: 0:29
 */

class Comment extends Eloquent
{
    protected $table = "comments";

    public function article()
    {
        return $this->belongsTo('Article');
    }
} 