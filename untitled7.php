<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo strlen("Hello world") . "<br/>"; 
    echo str_word_count("Hello word") . "<br/>";
    echo strpos("Hello world", "world") . "<br/>";
    echo strtoupper("Hello World") . "<br/>";
    echo strtolower("HELLO WORLD") . "<br/>";
    echo str_replace("world", "Fahim", "Hello world") . "<br/>";
    echo strrev("Hello world") . "<br/>";
    echo trim("  Hello world      ") . "<br/>";
    print_r(explode(" ", "Hello world"));
    echo substr("Hello world", 6, 5);
    ?>
</body>
</html>