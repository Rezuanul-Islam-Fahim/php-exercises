<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Car
    {
        public $color;
        public $model;

        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }

        public function message()
        {
            return "My car is a $this->color $this->model" . "!";
        }
    }

    $my_car = new Car("Yellow", "Lamborghini");
    var_dump($my_car);
    echo $my_car->message();
    ?>
</body>

</html>