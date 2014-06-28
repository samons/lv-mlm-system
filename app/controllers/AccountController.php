<?php

class AccountController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Account Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'AccountController@showRegister');
	|
	*/

	public function showRegister()
	{
		return View::make('account/register');
	}

	public function addUser() 
	{	$userdata = array(
			'firstname' => $_POST['firstname'],
			'lastname'  => $_POST['lastname'],
			'email'     => $_POST['email'],
			// 'activationcode' =>$_POST['activationcode'],
			'password'  => $_POST['password'],
		);

		$result = User::addUser($userdata);
		return $result;
	}

}
