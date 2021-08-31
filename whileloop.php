<?php include 'includes/header.php' ?>

<h1>While Loop Statement</h1>

    <?php
        $grade = 0;
        while($grade < 10) {

            echo '<p>I am a While Loop</p>';
            $grade++;
        }
    
    
    ?>
<h1>Do-While Loop Statement</h1>

<?php

$grade = 0;
        do{
            

                echo '<p>I am a Do-While Loop</p>';
                $grade++;
            
        }
        while($grade < 10);
    
    
    ?>

<?php

require 'includes/footer.php'

?>