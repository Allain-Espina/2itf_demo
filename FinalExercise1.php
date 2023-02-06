<html>
    <head>
        <title>FINAL EXERCISE 1</title>
    </head>
    <body>
        <h1>FINAL EXERCISE 1</h1>
        <?php

            $string1 = "tIgErs";

            echo "<strong>Original String:</strong> $string1". "<br>";
            echo "<strong>To Uppercase:</strong> ". strtoupper($string1). "<br>";
            echo "<strong>To Lowercase:</strong> ". strtolower($string1). "<br>";
            echo "<strong>First Letter to Uppercase:</strong> ". ucfirst($string1). "<br><br>";
            
            $string2 = "golden state warriors";

            echo "<strong>Original String:</strong> $string2". "<br>";
            echo "<strong>First Letter of Words to Uppercase:</strong> ". ucwords($string2). "<br>";
            echo "<strong>Number of Characters (Length):</strong> ". strlen($string2). "<br>";

        ?>
    </body>
</html>