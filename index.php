<?php

// Premiere ligne

$fruits = array("Apple", "Banana", "Orange");
print_r( count($fruits) ."<br>");
print_r( $fruits[1]);

//Deuxieme ligne


$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

print_r( "<br><br>Ben is " .$age["Ben"]  . " years old.<br><br>");

foreach($age as $x => $y) {
    print_r("<br>Key=" .$x  . ", Value=" .$y ."<br>");
}

//Troisieme ligne

$colors = array("red", "green", "blue", "yellow");
print_r(sort($colors));
print_r(rsort($colors));

// Quatrieme ligne

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
print_r( ksort($age));





