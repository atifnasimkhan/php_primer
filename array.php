<?php include 'includes/header.php' ?>

    <?php
 
 $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9 ,10, 7, 89, 56, 43, 98, 76, 90, 11, 2);

        echo $numbers[5];
        echo "<p>$numbers[9]</p>";

        $size = count($numbers);

        echo "<p>Array numbers is size: $size</p>";

        for ($count = 0; $count < $size; $count++){

                echo "<p>$numbers[$count]</p>";
        };

        ?>
<?php

require 'includes/footer.php'

?>