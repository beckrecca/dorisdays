<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create users table
		Schema::create('users', function($table) {

    	$table->increments('id');
    	$table->string('email')->unique();
    	$table->string('username', 12)->unique();
    	$table->date('DOB');
    	$table->string('remember_token',100); 
    	$table->string('password');
    	$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
