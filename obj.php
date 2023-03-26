<?php 

require_once "./classes/Fruit.php";

// $assoc = (object) [
$assoc = [
    'name' => 'saw htut' , 
    'age' => 18
];



// if object 
// var_dump($assoc->name);

// if assoc array 
// var_dump($assoc['name']);

// about Fruit  OOP class 


$apple = new Fruit();
$apple->weight = 99 ;
var_dump($apple->weight);