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
        public $name, $color;

        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        public function intro()
        {
            echo "The fruit is {$this->name} and color is {$this->color}.";
        }
    }

    class Strawberry extends Fruit
    {
        public $weight;

        public function __construct($name, $color, $weight)
        {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        public function intro()
        {
            echo "The fruit is {$this->name}, color is {$this->color} and weight is {$this->weight}gm";
        }
    }

    $ff = new Strawberry("Strawberry", "Red", 50);
    $ff->intro();
    ?>
</body>

</html>