<?php

    $n = $_GET['n'];
    $total = 0;

    echo "Total: " . $total . "<br>";

    foreach ($n as $i){
        echo "Value: " . $i . "<br>";

        $total += doubleval($i);

        echo "Total: " . $total . "<br>";
        echo "<br>";
    }