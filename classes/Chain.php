<?php 

class Chain{
    public function a():object{
        print("this is a ");
        return $this;
    }
    public function b(){
        print("this is b ");
        return $this;
    }
    public function c(){
        print("this is c ");
        return $this;
    }
    public function d(){
        return print("this is d ");
        
    }
}