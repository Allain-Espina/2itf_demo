<?php

    echo "<h2>Final Exercise 4: Arrays</h2>";

    echo "<h4>Task 1: Display the Elements of an Array</h4>";

    $integers = array(21, 56, 84, 37, 90);

    function display(){

        global $integers;

        foreach($integers as $val){

            echo $val . "&nbsp &nbsp &nbsp";

        }

        echo "<br><br>";

        foreach($integers as $pos => $val){

            echo "\$integers element at index " . $pos . " is equal to " . $val . ".<br><br>";

        }

    }

    display();

    echo "<h4>Task 2: Get the Sum of all the Elements within the Array</h4>";

    function sum($integers){

        global $integers;
        $sum = $integers[0] + $integers[1] + $integers[2] + $integers[3] + $integers[4];
        return $sum;

    }

    echo "$integers[0] + $integers[1] + $integers[2] + $integers[3] + $integers[4] = " . sum($integers) . "<br><br>";
    echo "The Sum of all Elements within the Integer Array is equal to " . sum($integers) . "<br><br>";

    echo "<br><strong>Name: </strong>Allain Daniel S. Espina<br>";
    echo "<strong>Section: </strong>2ITF<br>";
    echo "<strong>Course: </strong>APPLICATIONS DEVELOPMENT AND EMERGING TECHNOLOGIES 1 (WEB-FRONT-END)<br>";

    echo "<br><strong> COSMOS TIX<br>";
    echo "<strong>UP FAIR CUTIE<br>";
    echo "<strong>UP PLZ<br>";
?>