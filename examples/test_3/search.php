<?php

$a[] = "Mohammad";
$a[] = "Atawneh";
$a[] = "sara";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "fedaa";
$a[] = "khalid";
$a[] = "Monther";
$a[] = "sameh";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Tobes";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
$q = $_REQUEST["q"];
$hint = "";
if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($a as $name){
        if(stristr($q, substr($name, 0, $len))){
            if($hint == ""){
                $hint = $name;
            }else{
                $hint .= ", $name";
            }
        }
    }
}
echo $hint === "" ? "no suggestion" : $hint;
    // echo "yes yes yes !!!";

?>