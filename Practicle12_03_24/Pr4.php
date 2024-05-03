<!-- Write php script find max number for given three number -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pr4</title>
</head>

<body>
    <?php
    function maxNum($a, $b, $c)
    {
        if ($a >= $b) {
            if ($a >= $c) {
                return $a;
            } else {
                return $c;
            }
        } else {
            if ($b >= $c) {
                return $b;
            } else {
                return $c;
            }
        }
    }

    echo "Max Number is ". maxNum(90,100,50);

    ?>
</body>

</html>