<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    class TableRows extends RecursiveIteratorIterator
    {
        public function __construct($t)
        {
            parent::__construct($t, self::LEAVES_ONLY);
        }

        public function current(): mixed
        {
            return "<td>" . parent::current() . "</td>";
        }

        public function beginChildren(): void
        {
            echo "<tr>";
        }

        public function endChildren(): void
        {
            echo "</tr>";
        }
    }

    $host = "localhost";
    $db   = "learnphp";
    $user = "rezuanulfahim";
    $pass = "mypass";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT id, firstname, lastname, email FROM myguests");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($data) {
            echo "<table>";
            echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Email</th></tr>";
            $table_data = new TableRows(new RecursiveArrayIterator($data));
            
            foreach ($table_data as $k => $v) {
                echo $v;
            }

            echo "</table>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
    ?>
</body>

</html>