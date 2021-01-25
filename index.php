<?php

// Premiere ligne

$fruits = array("Apple", "Banana", "Orange");
echo count($fruits) ."<br>";
echo $fruits[1];

//Deuxieme ligne


$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "<br><br>Ben is " .$age["Ben"]  . " years old.<br><br>";

foreach($age as $x => $y) {
    echo "<br>Key=" .$x  . ", Value=" .$y ."<br>" ;
}

//Troisieme ligne

$colors = array("red", "green", "blue", "yellow");
echo sort($colors);
echo rsort($colors);

// Quatrieme ligne

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo ksort($age);





