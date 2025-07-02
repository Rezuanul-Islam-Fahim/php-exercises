<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $colors = array("Yellow", "Blue", "Red", "Brown");
    $members = array("Peter" => "34", "John" => "44");

    foreach ($colors as $x) {
        echo $x . "<br/>";
    }

    foreach($members as $x => $y) {
        echo "$x : $y<br/>";
    }
    ?>
</body>

</html>