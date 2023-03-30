<?php 


class Obj{
    public static $a = "a";
    public static function b(){
        return "this is b";
    }
    // $this can not be used in calling static variable and method
    public static function c(){
        return self::$a . self::b();
    }
}