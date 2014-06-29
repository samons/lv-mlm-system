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
			    $table->unique('email');
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
			$result .= 'Table \'users\' created,';
		}
		elseif (!Schema::hasTable('codes'))
		{
			Schema::create('codes',	function($table)
			{
			    $table->increments('id');
			    $table->string('membertype');
			    $table->string('activationcode');
			    $table->unique('activationcode');
			    $table->string('sponsor');
			    $table->string('status');
			    $table->timestamps();
			});
			$result .= 'Table \'codes\' created';
		}
		else
		{
			$result .= $this->scopeupdateTables();
			return 'Tables already initialized,' . $result;	
		}
    	
    	return $result;
    }

    public function scopeupdateTables()
    {
		if (Schema::hasTable('codes'))
		{
			Schema::table('codes', function($table)
			{
				if (!Schema::hasColumn('codes', 'membertype'))
				{
					$table->string('membertype')->after('id');
				}

				if (Schema::hasColumn('codes', 'activationcode'))
				{
					$table->unique('activationcode');
				}
			});

			return "Tables updated";
		}
    }

}
