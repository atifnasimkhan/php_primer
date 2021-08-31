<?php include 'includes/header.php' ?>

    <H1>Functions</H1>
    <?php
function myFirstFunction(){

    echo "This is my function. <br/><hr>";
}

myFirstFunction();
myFirstFunction();
myFirstFunction();
myFirstFunction();
myFirstFunction();
myFirstFunction();
myFirstFunction();

// Defining a function with Parameters

function addFunction($num1, $num2){

    $sum = $num1 + $num2;
    echo "Sum of $num1 and $num2 is : $sum <br/>";
}

    addFunction(10, 20);
    addFunction(10, 30);
    addFunction(10, 40);
    addFunction(10, 50);
    addFunction(10, 60);
    addFunction(10, 70);


?>
    
    <?php

require 'includes/footer.php'

?>