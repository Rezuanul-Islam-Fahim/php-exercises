<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    trait message1
    {
        public function msg1()
        {
            echo "This is message 1.<br/>";
        }
    }

    trait message2
    {
        public function msg2()
        {
            echo "This is message 2.<br/>";
        }
    }

    class Class1
    {
        use message1;
    }

    class Class2
    {
        use message1, message2;
    }

    $c1 = new Class1();
    $c2 = new Class2();
    $c1->msg1();
    $c2->msg1();
    $c2->msg2();
    ?>
</body>

</html>