<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 01.01.2015
 * Time: 16:47
 */

class AngularController extends Controller
{
    public function serve()
    {
        return View::make(Input::get('id'));
    }
}