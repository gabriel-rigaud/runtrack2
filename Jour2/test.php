<?php
    for ($i = 0; $i <= 100; $i++){

        if ($i <= 20){
                echo  "<I>" . $i . "</I>" . "</br>";
            }
        else if (($i > 24 ) and ($i <= 50)) {
            echo "<u>" . $i . "</u>" . "</br>";
        } else {
            echo  $i . "</br>";
        }
    }
?>


