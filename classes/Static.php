<?php 

class testStatic{
    static $about = "test for stat5ic" ; 
    static function tellme(){
        echo self::$about;
        echo static::$about;
    }
};


echo testStatic::$about;
echo testStatic::tellme();