<?php 


require_once "./auto_load.php";

// ------------------- creating new db 
// $db = new Db('mvcs');
// ------------------- creating new db 

 
// 
// var_dump(($db->create([
//     'name' => 'saw htut' ,
//     'age'=>18 , 
//     'address' =>"helden"
// ])));


// $db->index();


// print_r( $db->first(7));

// print_r($db->update(7,[
//     'name' => 'saw william naing' ,
//     'age'=>18 , 
//     'address' =>"helden"
// ]));



// print_r($db->delete(7));

//------------------- for object static variable in static function using self
// echo Obj::$a;
// echo Obj::b();
//------------------- for object static variable in static function using self


// method chaining start 
// $chain = new Chain();

// $chain->a()->b()->c()->d();

// method chaining end


// $query_builder = new Query_Builder("users");
// $query_builder->where('Gender',"=","female")->where("lan","=","eng")->Orwhere('id','=',"4")->OrderBy("id" , "DESC")->OrderBy("age");
// echo $query_builder->sql();


// encapsulation 

$pserson =  new Person();
echo $pserson->getNudepics();
$pserson->setHomeAddress("helden");
echo $pserson->getHomeAddress();





