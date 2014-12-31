<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 31.12.2014
 * Time: 16:02
 */

class Project extends Eloquent
{
    protected $table = 'projects';

    public function articles()
    {
        return $this->hasMany('Article');
    }
} 