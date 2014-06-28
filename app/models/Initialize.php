<?php

class Initialize extends Eloquent {

	public function scopemakeTables() 
    {	$result = "";
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
			$result = 'Table \'users\' created,';
		}
		else if (!Schema::hasTable('codes'))
		{
			Schema::create('codes',	function($table)
			{
			    $table->increments('id');
			    $table->string('activationcode');
			    $table->string('sponsor');
			    $table->string('status');
			    $table->timestamps();
			});
			$result .= 'Table \'codes\' created';
			
		}
		else
		{
			return 'Tables already initialized';	
		}
    	
    	return $result;
    }

}
