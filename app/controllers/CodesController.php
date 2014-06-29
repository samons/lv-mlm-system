<?php

class CodesController extends BaseController {

	public function generateCode() {
		$data = array();
		$result = 0;
		$count = $_POST['count'];

		for ($i=0; $i < $count; $i++) { 

			$data['activationcode'] = Crypt::encrypt(str_random(20));
			$data['membertype'] = $_POST['membertype'];
			$result = $result + Codes::makeCode($data);	
		}

		return $result . " activation codes added.";

	}

}
