<?php

require __DIR__.'/../vendor/autoload.php';

use OOP\Format\JSON;
use OOP\Format\{XML, YAML};

$json = new JSON([
	"name" => "John", 
	"surname" => "Doe"
]);

$xml = new XML();
$yaml = new YAML();

//var_dump($json->convert());
//this will show the data from instantiating -> from construct
var_dump($json->getData());

//change data using the setter
// $json->setData([]);
// var_dump($json->getData());
var_dump($json->convert());
// var_dump($xml);
// var_dump($yaml);