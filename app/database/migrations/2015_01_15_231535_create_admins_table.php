<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('admins', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('login')->unique();
            $table->string('password', 60);
            $table->timestamps();

            $table->rememberToken();
            $table->softDeletes();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('admins');
	}

}
