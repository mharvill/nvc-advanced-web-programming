<?php

/*****************************************
*************  Instructions  *************
******************************************
         Fill in your responses
        to this assignment below.
*****************************************/

// 01. Create and Call at least one function.

function myName(){

echo "My name is Melody Ann Harvill. <br>";
}

myName();


// 02. Create a For Loop

echo "<p> I have </p>";

for ($count = 0; $count <= 4; $count++) {


echo "<p> $count </p>";

}

echo "siblings.<br>";


// 03. Create a While Loop

$number = 1;

while($number <= 13) {

 echo "<br>Count to the number: $number <br>";

$number++;

}

echo "<br>";

// 04. Create an Array

//Didn't put the brackets because I kept getting an error that had something to do with the comma instead of a closing bracket. It worked for some reason this way. 

$siblings = array("Michael", "Michaela", "Deana", "McCaleb");

echo "<p>My favorite siblings are " .$siblings[1]. " and " .$siblings[2]. ".</p>";



echo "<p>Just kidding...</p>";

echo "<br>";

// 05. Sort an Array

echo "<p>Ranked from oldest to youngest is:</p>";

$siblings = array("Me", "Michael", "Michaela", "Deana", "McCaleb");
asort($siblings);

$clength = count($siblings);
for($x = 0; $x < $clength; $x++) {
    echo $siblings[$x];
    echo "<br>";
}



// 01. Create a Switch Statement





?>