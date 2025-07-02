<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Domain {
        protected static function message()
        {
            return "This is a message";
        }
    }

    class Hosting extends Domain 
    {
        public $my_str;

        public function __construct()
        {
            $this->my_str = parent::message();
        }
    }

    $my_class = new Hosting();
    echo $my_class->my_str;
    ?>
</body>
</html>