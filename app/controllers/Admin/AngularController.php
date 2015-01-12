<?php namespace Admin;
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 01.01.2015
 * Time: 16:47
 */

use \View;
use \Input;
use \Controller;

class AngularController extends Controller
{
    public function serve()
    {
        return View::make('admin.angularPartials.'.Input::get('id'));
    }
}