<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 02.01.2015
 * Time: 1:03
 */

class AdminTableSeeder extends Seeder
{
    public function run()
    {
        $admin = new Admin();
        $admin->login = 'admin';
        $admin->password = Hash::make('admin');
        $admin->save();
    }
} 