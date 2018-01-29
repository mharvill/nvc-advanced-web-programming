<?php

// 01. Create and use a string variable

$title = "Advanced Web Programming";

// 02. Create and use an integer variable

$number = 8;

// 03. Create and use a boolean variable


// 04. Create and call one or more function(s)
// placed in the body (hello world)


// 05. Basic conditional statement


$pets = [

"Dogs",
"a snake.",
"Budgies"

];

$selectedpets = $pets[(1)];

?>

<html>
<head>

<title> <?php echo $title; ?> </title> 

</head
<body>


<h1><?php
function writeMsg() {
    echo "Hello world!";
}

writeMsg();
?></h1>

<h2> <?php echo $title; ?> </h2>

<h4><?php echo "<p> Melody Harvill </p>"; ?></h4>

<?php echo "My favorite pet I own is " .$selectedpets?>;

<?php echo "How many pets do I have?: " .$number?>

</body>
</html>