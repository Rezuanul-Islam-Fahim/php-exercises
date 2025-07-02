<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Fruit
    {
        public $name;
        public $color;

        function __construct($name, $color) 
        {
            $this->name = $name; 
            $this->color = $color;
        }

        function set_name($name)
        {
            $this->name = $name;
        }

        function get_name()
        {
            return $this->name;
        }

        function set_color($color)
        {
            $this->color = $color;
        }

        function get_color()
        {
            return $this->color;
        }
    }

    $apple = new Fruit("Pineapple", "Yellow");
    echo $apple->get_name() . "<br/>";
    echo $apple->get_color() . "<br/>";
    $apple->set_name("Apple");
    echo $apple->get_name() . "<br/>";
    $apple->set_color("Red");
    echo $apple->get_color() . "<br/>";
    $apple->color = "Blood red";
    echo $apple->color . "<br/>";
    echo $apple instanceof Fruit . "<br/>";
    var_dump($apple instanceof Fruit);
    ?>
</body>

</html>