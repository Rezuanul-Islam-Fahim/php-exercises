<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    $x = 6;
    $y = 5;

    function test1()
    {
        global $x, $y;
        echo "The sum is " . $x + $y . "<br/>";
    }

    function test2()
    {
        global $x, $y;
        $y = $x + $y + 5;
    }

    test1();
    test2();
    echo $y;
    ?>
</body>

</html>