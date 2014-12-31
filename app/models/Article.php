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
} 