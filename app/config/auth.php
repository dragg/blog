<?php

return array(
    'multi' => array (
        'admin' => array(
            'driver' => 'eloquent',

            'model' => 'Admin',

            'table' => 'admins'
        ),

        'user' => array(
            'driver' => 'eloquent',

            'model' => 'User',

            'table' => 'users'
        )
    ),


	'reminder' => array(

		'email' => 'emails.auth.reminder',

		'table' => 'password_reminders',

		'expire' => 60,

	),

);
