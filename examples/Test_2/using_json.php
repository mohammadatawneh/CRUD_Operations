<?php
/* class Fruit {
    public $name;
    public $color;
    public $weight;
}
$f = new Fruit();

$f->name = "John";
$f->color = "yeelow";
$f->city = "New York";
$f->weight = 3000; */

$arr = array("name"=>"Mohammad", "age"=>35 , "array"=>array(1,2,3));
// print_r($arr);
$myJSON = json_encode($arr);

echo $myJSON;
?>
