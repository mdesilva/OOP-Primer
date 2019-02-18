<?php

$dir = __DIR__;
require_once($dir . "/class-basics.php");

/*

Here we create instances, or objects, of the class that we defined.
Essentially, each object has its own set of data for each of the member variables we defined in the class.
We can also call the member functions that we defined in the class on each object.

*/

//if we defined a constructor function for the class, we must follow it when creating instances of our objects.
$physics = new Books("30", "Physics of the World");
$history = new Books("20", "History before AD");


//calling different functions of our objects
$physics->getInfo();

$physics->setPrice("50");
$physics->setTitle("Physics of the World: Edited");
$physics->getInfo();

 ?>
