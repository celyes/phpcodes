<?php 

function getDetails($name, $city){
	return "My name is {$name},
	and i'm a developer from {$city} <br>";
}

echo getDetails("Mohamed", "Djelfa");
echo getDetails("Ziane", "Hassi Bahbah");

?>