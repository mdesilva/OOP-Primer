<?php
/*in this example we define a class.
Think of a class as a template for creating many of the same kind of object
*/

class Books{
  /* Member variables */
  var $price;
  var $title;

  /*
  This is a constructor function, which is a special type of function that is called anytime we create our object.
  We can take advantage of this behavior by initializing our variables through the constructor function.
  */
  function __construct($price, $title){
    $this->price = $price;
    $this->title = $title;
  }
  /* Member functions. Use this to refer to variables and functions within this class */
  function setPrice($price){
    $this->price = $price;
  }

  function setTitle($title){
    $this->title = $title;
  }

  function getPrice(){
    echo $this->price;
    echo "\n";
  }

  function getTitle(){
    echo $this->title;
    echo "\n";
  }

  function getInfo(){
    echo $this->title . " costs " . $this->price .  " dollars.";
    echo "\n";
  }

}
