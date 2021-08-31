<?php include 'includes/header.php' ?>

    <h1> Date-Time Manipulation </h1>

    <?php
        $datenow = getdate();
        echo "Today Date is: <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon'] . '<br/>';
        echo $datenow['year'] . '<br/>';
        echo "Today Date is:" . $datenow['mon'] . '/' . $datenow['mday'] . '/' . $datenow['year'] . '<br/>';
        echo time();
    ?>
<?php

require 'includes/footer.php'

?>