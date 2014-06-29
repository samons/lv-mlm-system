<?php

class CodesController extends BaseController {

	public function generateCode($data) {

		$string = str_random(20);
		
		return "Codes sent to your email.";

	}

}
