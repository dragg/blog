<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 31.12.2014
 * Time: 16:02
 */

class Article extends Eloquent
{
    protected $table = 'articles';

    public function project()
    {
        return $this->belongsTo('Project');
    }

    public function comments()
    {
        return $this->hasMany('Comment');
    }

    public function prev()
    {
        return $this->hasOne('Article', 'id', 'prev_article_id')->select(['id', 'title']);
    }

    public function next()
    {
        return $this->hasOne('Article', 'id', 'next_article_id')->select(['id', 'title']);
    }
} 