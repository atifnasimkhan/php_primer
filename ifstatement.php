<?php include 'includes/header.php' ?>

        <?php
        echo '<h2>If Statement </h2>';
           
        $grade = 30;

        if ($grade >= 50){

            echo '<h3>YOU HAVE PASSED</h3>';
        }else {

            echo '<h1 style="color: red"> YOU FAILED </h1>';
        }

        ?>    

<?php

require 'includes/footer.php'

?>