<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $x = 6;
    $y = 8;

    function myTest()
    {
        $GLOBALS['y'] = $GLOBALS['x']  + $GLOBALS['y'];
    }

    myTest();
    echo $y;
    ?>
</body>

</html>