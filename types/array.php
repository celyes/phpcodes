<?php 

$cities = array("Djelfa", "Algiers", "Oran", "Annaba"); // single dimension array

$person = array(
    "name" => "Mohamed",
    "job" => "Driver",
    "age" => 31
); // associative array;

$countries = array(
    array(
        "name" => "Algeria",
        "capital" => "Algiers"
    ),
    
    array(
        "name" => "England",
        "capital" => "London"
    ),
    
    array(
        "name" => "Russia",
        "capital" => "Moscow"
        )
    );
    
foreach($countries as $country){
    echo $country["name"];
    echo " -> ";
    echo $country['capital'];
    echo "<br>";
}
