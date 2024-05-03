<!-- Write a php script to demonstrate Array  function-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pr6</title>
</head>

<body>
    <?php

    $array1 = array(1, 2, 3, 4, 5);
    // Sort function to sort 
    sort($array1);
    print_r($array1);
    echo "<br>";
    
    //Array combination fucntion 
    $array3 = array(1,2,3);
    $array2 = array("Ram", "Akash", "Rishav");
    print_r(array_combine($array3, $array2));
    echo "<br>";
    
    //Array count value 
    print_r(array_count_values($array1));
    echo "<br>";
    
    // Array reverse 
    print_r(array_reverse($array1));
    echo "<br>";
    
    // Array pop : it is pop last array element 
    array_pop($array2);
    print_r($array2);
    echo "<br>";
    
    // Array Push
    $a = 3;
    $b = 8;
    print_r(array_push($array1, $a, $b));
    echo "<br>";
    
    // Array search 
    print_r(array_search(3, $array1));
    echo "<br>";
    
    // Array sum 
    print_r(array_sum($array1));
    echo "<br>";

    // end function print the last  element of the array.
    echo end($array2);

    ?>
</body>

</html>