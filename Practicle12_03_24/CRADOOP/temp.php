<?php
    include 'database.php';

    $obj = new query();
    $result =$obj->updateData('students','name="Raj Patel"', 'id="11"');
    echo '<pre>';
    print_r($result);
?>