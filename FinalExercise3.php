<?php

    echo "<h2>Final Exercise 3: Operators</h2>";

    echo "<h4>Task 1: Addition</h4>";
    $a = 10;
    $b = 5;
    $sum = $a + $b;
    echo "The sum of $a and $b is $sum.<br>";

    echo "<h4>Task 2: Subtraction No. 1</h4>";
    $c = 12;
    $d = 3;
    $diff1 = $c - $d;
    echo "The difference between $c and $d is $diff1.<br>";

    echo "<h4>Task 3: Subtraction No. 2</h4>";
    $e = 5;
    $f = 10;
    $diff2 = $e - $f;
    echo "The difference between $e and $f is $diff2.<br>";

    echo "<h4>Task 4: Multiplication</h4>";
    $g = 7;
    $h = 11;
    $prod = $g * $h;
    echo "The product of $g and $h is $prod.<br>";

    echo "<h4>Task 5: Division</h4>";
    $i = 10;
    $j = 4;
    $quo = $i / $j;
    echo "The quotient of $i divided by $j is $quo.<br>";

    echo "<h4>Task 5: Modulo Division</h4>";
    $k = 10;
    $l = 4;
    $rem = $k % $l;
    echo "The remainder of $i divided by $j is $rem.<br>";

    echo "<h4>Task 6: Positive, Negative, or Zero?</h4>";
    $num = 30;
    echo "Given Number: $num<br>";

    if($num > 0){
        echo "<br>$num is a positive integer.<br>";
    }

    elseif($num == 0){
        echo "<br>$num is a equal to 0.<br>";
    }

    else{
        echo "<br>$num is a negative integer.<br>";
    }

    echo "<br><strong>Name: </strong>Allain Daniel S. Espina<br>";
    echo "<strong>Section: </strong>2ITF<br>";
    echo "<strong>Course: </strong>APPLICATIONS DEVELOPMENT AND EMERGING TECHNOLOGIES 1 (WEB-FRONT-END)<br>";

    echo "<br><strong>Name: </strong>Keila Bangero Santiago<br>";
    echo "<strong>Province: </strong>Pampanga<br>";
    echo "<strong>Age: </strong>20<br>";
?>