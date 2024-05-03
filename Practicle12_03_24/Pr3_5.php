<!-- Write a php script ot gernarte result and dipalay grad  -->
<!-- Write a php script ot demonstrate variable function   -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pr3 & 5</title>
</head>
<body>
    <?php 
        function cal_per($sub1, $sub2, $sub3){
            $total = $sub1 + $sub2 + $sub3;
            $per = $total / 3;
            return $per;
        }

        $per = cal_per(80,90,100);
        switch($per){
            case ($per <= 33):
                echo("Faill");
                break;
            case ($per > 33 && $per <= 55):
                echo "Gread C";
                break;
            case ($per > 55 && $per <= 80):
                echo "Gread B";
                break;
            case ($per > 80 && $per <= 100):
                echo "Gread A";
                break;
            default:
                echo "Please enter right persentage";
        }
    ?>
</body>
</html>