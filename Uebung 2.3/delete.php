<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "northwind";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br />";
} catch (PDOException $e) {
    echo "Connection failed: <br />" . $e->getMessage();
}
if ((isset($_GET['id'])) && (($_GET['id']) != "")) {
    $orderid = $_GET['id'];
    $sql = "DELETE FROM orders WHERE id = :orderid";
    $statement = $conn->prepare($sql);
    $statement->execute([
        ':orderid' => $orderid
    ]);

    header("Location:http://m151.test/Uebung%202.3/ ");
    exit();
    
} else {
    echo "Order couldnt be deleted";
}
?>