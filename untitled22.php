<?php 
$servername = "localhost";
$username = "rezuanulfahim";
$password = "codecPasscode@1";
$dbname = "learnphp";

try{
    $conn = new PDO(
        "mysql:host=$servername;dbname=$dbname",
        $username,
        $password,
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO myguests (firstname, lastname, email)
    VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":email", $email);

    $firstname = "Test";
    $lastname = "User 1";
    $email = "testemail1@test.com";
    $stmt->execute();

    $firstname = "Test";
    $lastname = "User 2";
    $email = "testemail2@test.com";
    $stmt->execute();

    $firstname = "Test";
    $lastname = "User 3";
    $email = "testemail3@test.com";
    $stmt->execute();

    $firstname = "Test";
    $lastname = "User 4";
    $email = "testemail4@test.com";
    $stmt->execute();

    echo "New records added successfully<br/>";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage() . "<br/>";
}

$conn = null;
?>