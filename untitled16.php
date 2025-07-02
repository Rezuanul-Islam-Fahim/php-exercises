<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    abstract class Car 
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        abstract public function intro();
    }

    class Audi extends Car 
    {
        public function intro() 
        {
            echo "Choose German quality! I'm an $this->name!";
        }
    }

    $my_car = new Audi("Audi");
    $my_car->intro();
    ?>
</body>
</html>