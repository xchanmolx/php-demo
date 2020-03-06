<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Return Values Functions</title>
</head>
<body>

<?php

    function addNumbers($number1, $number2) {

        $sum = $number1 + $number2;

        return $sum;

    }

    $result = addNumbers(34, 54);

    $result = addNumbers(100, $result);

    echo $result;

?>


</body>
</html>
