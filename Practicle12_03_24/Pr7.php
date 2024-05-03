<!-- Write php script to demonstarte string function  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pr 7</title>
</head>

<body>
    <?php
    $name = "setu is good boy";
    //print length of string 
    echo strlen($name);
    echo "<br>";

    //print count word in string
    echo str_word_count($name);
    echo "<br>";

    //print reverse string 
    echo strrev($name);
    echo "<br>";

    //print position string char/word
    echo strpos($name, 'good');
    echo "<br>";

    //replace string 
    echo str_replace("setu", "patel", $name);
    echo "<br>";

    //repeat string 
    echo str_repeat($name, 5);
    echo "<br>";

    //remove right space 
    echo rtrim("setu   ");
    echo "<br>";

   //remove left space 
    echo ltrim("   setu");
    echo "<br>";

    //show your choise char 
    echo substr($name, 2, 1);

    ?>
</body>

</html>