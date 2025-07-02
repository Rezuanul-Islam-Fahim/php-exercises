<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $colors = array("Yellow", "Blue", "White", "Brown");

    foreach($colors as &$x) { 
        if ($x == "Blue") $x = "Pink";
    }

    var_dump($colors);
    ?>
</body>
</html>