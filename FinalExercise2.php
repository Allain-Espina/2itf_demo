<html>
    <head>
        <title>FINAL EXERCISE 2</title>
    </head>
    <body>
        <h1>FINAL EXERCISE 2</h1>
        <?php

            $string1a = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

            echo "<strong>First Given String:</strong> ". "\"$string1a\"". "<br>";
            
            echo "<strong>String Length:</strong> ". strlen($string1a). "<br>";
            
            settype($string1a, "integer");
            echo "<strong>Numerical Values:</strong> $string1a". "<br>";

            $string1b = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";    
            $strlowBeg = strpos($string1b, "a");
            $strlowEnd = strpos($string1b, "z");
            echo "<strong>Lowercase Values:</strong> ". substr($string1b, $strlowBeg, $strlowEnd). "<br>";

            //Locate the Index of each Character
            // echo "<strong>you:</strong> ". strpos($string1b, "y"). " ". strpos($string1b, "o"). " ". strpos($string1b, "u"). "<br>";
            // echo "<strong>love:</strong> ". strpos($string1b, "l"). " ". strpos($string1b, "o"). " ". strpos($string1b, "v"). " ". strpos($string1b, "e"). "<br>";
            // echo "<strong>UST:</strong> ". strpos($string1b, "U"). " ". strpos($string1b, "S"). " ". strpos($string1b, "T"). "<br>";
           
            echo "<strong>Generate Words:</strong> ". '"'. $string1b[60]. $string1b[50]. $string1b[56]. '", '.
            '"'. $string1b[47]. $string1b[50]. $string1b[57]. $string1b[40]. '", '.
            '"'. $string1b[30]. $string1b[28]. $string1b[29]. '"'. "<br><br>";

            $string2 = "the quick brown fox jumps over the lazy dog";

            echo "<strong>Second Given String:</strong> ". "\"$string2\"". "<br>";
            
            echo "<strong>String Length:</strong> ". strlen($string2). "<br>";

            $str2aBeg = substr($string2, 0, 9);
            $str2aEnd = substr($string2, 40, 43);
            $str2a =  " $str2aBeg". " $str2aEnd";
            echo "\"$str2a\"". "<br>";

            $str2bBeg = substr($string2, 0, 3);
            $str2bMid = substr($string2, 16, 19);
            $str2bEnd = substr($string2, 40, 43);
            $str2b =  "$str2bBeg". " $str2bMid". " $str2bEnd";
            echo "\"$str2b\"". "<br>";

            $str2cBeg = strpos($string2, "u");
            $str2cMid = strpos($string2, "s");
            $str2cEnd = strpos($string2, "t");
            $str2c =  "$string2[$str2cBeg]". "$string2[$str2cMid]". "$string2[$str2cEnd]";
            $str2C = strtoupper($str2c);
            echo "\"$str2C\"". "<br>";
            
            echo "<br><strong>Name: </strong>Keila Santiago<br>";
            echo "<strong>Section: </strong>2ITF<br>";
            echo "<strong> Birthday: <strong>December 13,2002";


        ?>
    </body>
</html>