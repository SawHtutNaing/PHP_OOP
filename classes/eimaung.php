<?php 

class Eimaung{
    public function __construct(public $name){
return "";
    }

    public function run(){
        echo "$this->name is running";
    }
    


    
   
}


$run = new Eimaung("sayr");
$run->run();
