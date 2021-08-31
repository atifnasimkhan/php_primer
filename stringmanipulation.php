<?php include 'includes/header.php' ?>

    <h1>String Manipulation</h1>
    <?php

        $phrase1 = "Students Who came late"; 
        $phrase2 = "Students Who didnt come late";
        $myname = "atif nasim khan";
        echo $phrase1 . " <br> " . $phrase2; 
        echo '<br>';
        echo '<hr>';

        echo 'my uppercase name firstletter: ' . ucfirst($myname).'<br>';
        echo 'my uppercase name firstletter of each word: ' . ucwords($myname).'<br>';
        echo 'All Uppeer Case: ' . strtoupper($myname) . '<br>';
        echo '<hr>';
        echo 'Repeat my name: ' . strtoupper(str_repeat($myname, 10)). '<br>';
        echo 'sub string extracted from my name: ' . substr($myname, 3, 9). '<br>';




    ?>
<?php

require 'includes/footer.php'

?>