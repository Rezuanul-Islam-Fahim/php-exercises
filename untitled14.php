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

        protected function intro()
        {
            echo "The fruit is {$this->name} and color is {$this->color}.";
        }
    }

    class Strawberry extends Fruit
    {
        public function message()
        {
            echo "Am I a fruit or a berry? ";
            $this->intro();
        }
    }

    $f1 = new Strawberry("Strawberry", "Red");
    $f1->message();
    ?>
</body>

</html>