<?php 

class A {
    public $x = "x";
    protected $y = "y";
    private $z = "z";
}

class B extends A {

}


$output = new B();
// var_dump($output);  // can get everything in the calss A even private variable and method

// but can not get output of this from

echo $output->x; //public
// echo $output->y; //protected
// echo $output->z; //private


