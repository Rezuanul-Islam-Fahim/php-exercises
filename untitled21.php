<?php 
$servername = "localhost";
$username = "rezuanulfahim";
$password = "codecPasscode@1";
$dbname = "learnphp";

try {
    $conn = new PDO(
        "mysql:host=$servername;dbname=$dbname",
        $username,
        $password,
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn->beginTransaction();

    $conn->exec("INSERT INTO myguests(firstname, lastname, email)
    VALUES('John', 'Doe', 'john@test.com')");

    $conn->exec("INSERT INTO myguests(firstname, lastname, email)
    VALUES('John', 'Mary', 'mary@test.com')");

    $conn->commit();

    echo "New records created successfully";
} catch (PDOException $e) {
    $conn->rollBack();
    echo "Error: " . $e->getMessage() . "<br/>";
}

$conn = null;
?>