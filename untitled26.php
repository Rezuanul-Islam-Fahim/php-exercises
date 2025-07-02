<?php
$servername = "localhost";
$username = "rezuanulfahim";
$password = "codecPasscode@1";
$dbname = "learnphp";

$query = intval($_REQUEST["q"]);

try {
    $conn = new PDO(
        "mysql:host=$servername;dbname=$dbname",
        $username,
        $password,
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, firstname, lastname, email FROM myguests
    WHERE id='$query'");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        echo "<table>";
        echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Email</th></tr>";
        echo "<tr>";
        echo "<td>" . $result["id"] . "</td>";
        echo "<td>" . $result["firstname"] . "</td>";
        echo "<td>" . $result["lastname"] . "</td>";
        echo "<td>" . $result["email"] . "</td>";
        echo "</tr></table>";
    } else {
        echo "No data found with id: " . $query;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>