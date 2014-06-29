<?php

class Codes extends Eloquent {

	protected $table = 'codes';

	public static function makeCode($data) {

		$codes = new Codes;

		foreach ($data as $key => $value) {
			$codes->$key = $value;
		}

		$codes->save();

		return 1;

	}

}