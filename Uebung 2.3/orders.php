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
    $customerId = $_GET['id'];
    $sql = "SELECT * FROM orders WHERE customer_id = :ID";
    $statement = $conn->prepare($sql);
    $statement->execute([
        ':ID' => $customerId
    ])
?>
    <table border="1px solid">
        <tr>
            <th>Order ID</th>
            <th>Order Date</th>
            <th>Shipped Date</th>
            <th>Delete Order</th>
        </tr>
        <?php
        while ($row = $statement->fetch()) {
        ?>
            <tr>
                <td><?= $row['id'] . "<br />" ?> </td>
                <td><?= $row['order_date'] . "<br />" ?> </td>
                <td><?= $row['shipped_date'] . "<br /><br />" ?> </td>
                <td><a href='delete.php?id=<?php echo $row['id']?>'>Delete</a></td>
            </tr>
        <?php
        }
        ?>

    </table>
<?php
} else {
    echo "Customer not Found";
}

?>