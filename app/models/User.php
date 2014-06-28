<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function scopemakeTables() 
    {	
    	if (!Schema::hasTable('users'))
		{
			Schema::create('users',	function($table)
			{
			    $table->increments('id');
			    $table->string('membertype');
			    $table->string('email');
			    $table->string('password');
			    $table->string('firstname', 50);
			    $table->string('middlename', 50);
			    $table->string('lastname', 50);
			    $table->string('sex', 1);
			    $table->string('civilstatus');
			    $table->date('birthdate');
			    $table->integer('directupline');
			    $table->integer('sponsor');
			    $table->integer('pointvalue');
			    $table->integer('registeredby');
			    $table->timestamps();
			});
			return 'Table \'users\' created';
			exit;
		}
    	
    	return 'Tables already initialized';
    }

}
