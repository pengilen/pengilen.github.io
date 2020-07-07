<?php

$a = array();
$obj1 = (object)array();
$obj2 = (object)array();

$obj1->type = 0;
$obj1->content = "1594112711 My Array Test Title 5";
$obj1->bold = 1;
$obj1->align = 2;
$obj1->format = 3;
array_push($a,$obj1);

$obj2->type = 1;
$obj2->path = "https://www.matetech.in/myfiles/1.jpg";
$obj2->align = 2;
array_push($a,$obj2);

echo json_encode($a,JSON_FORCE_OBJECT);

?>
