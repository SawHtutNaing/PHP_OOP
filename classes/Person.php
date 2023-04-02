<?php 

class Person{
    public $appearance ; 
    protected $homeAddress;
    private $nudePics = "oknrsr";
    // all above can use with static even private but 
    // in formal way static use with public


    // encapsulation 


    public function getNudepics (){
        return $this->nudePics ; 
    }
    
    public function getHomeAddress (){
        return $this->homeAddress ; 
    }

        
    public function setHomeAddress ($homeAddress){
     $this->homeAddress  = $homeAddress; 
    }
    


}


