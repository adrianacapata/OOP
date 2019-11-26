<?php

namespace OOP\Format;

/**
 * 
 */
class JSON {

	//constants can be accessed using the SELF keyword as STATIC variables
	const DATA = [
			"success" => true
		];

	private $data;

	public function __construct($data) {

		$this->data = $data;
	}

	//get the value of private $data
	public function getData() {
		return $this->data;
	}

	//give the ability to change the value of private $data after instantiating the class
	public function setData($data) {
		$this->data = $data;
	}

	//give another class the possibility to use the private method, but cannot change its code
	public function convert() {
		return $this->toJSON();
	}

	//magic method
	public function __toString() {
		return $this->toJSON();
	}
	//define a private method
	private function toJSON() {
		return json_encode(
			// array_merge(
				// self::DATA, 
				$this->data
			// )
		);
	}

	//return the content of the constant
	public static function convertData() {
		return json_encode(self::DATA);
	}
	
}