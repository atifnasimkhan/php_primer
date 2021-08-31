<?php include 'includes/header.php' ?>

    <h1>Switch Statement</h1>
<?php
    $grade = 'D';
    switch($grade){

            case 'A':

                echo '<h1 style="color: blue"> YOU ARE A SUPERSTAR!! </h1>';
                break;

            case 'B':

                echo '<h1 style="color: green"> YOU ARE A  RISING sSTAR!! </h1>';
                break;

            case 'C':

                echo '<h1 style="color: yellow"> YOU ARE A STAR!! </h1>';
                break;

            default:

                echo '<h1 style="color: red"> YOU ARE <strong>FAIL!!</strong> </h1>';
        




    }
?>
<?php

require 'includes/footer.php'

?>