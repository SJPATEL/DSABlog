<!-- Write php script to demonstrate arithmatic, comparision and logicle operateor. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pr2</title>
</head>
<body>
    <?php 
        $a = 10;
        $b = 20;
        $c = ($a == $b);
        $d = ($a >= $b);
        $e = ($a <= $b);
        $f = ($a != $b);
        $g = ($a === $b);

        if($c && $d){
            echo "if 1 <br>";
        }
        if($c || $e){
            echo "if 2 <br>";
        }
        if(!$g){
            echo "if 3 <br>";
        }
    ?>
</body>
</html>