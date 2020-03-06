<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

    $x = "outside"; // global scope

    function convert() {
        global $x;
        $x = "inside" . "<br>"; // local scope
    }

    echo $x . "<br>";

    convert();

    echo $x;

    echo $x;


?>


</body>
</html>
