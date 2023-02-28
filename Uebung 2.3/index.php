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
if (isset($_GET['job_title'])){
$jobTitle = $_GET['job_title'];
}
else{
    $jobTitle = "Purchasing Manager";
}
$sql = "SELECT * FROM customers WHERE job_title = :job_title";
$statement = $conn->prepare($sql);
$statement->execute([
':job_title'=> $jobTitle
])
?>
<table border="1px solid">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Job</th>
        <th>Orders</th>

    </tr>
    <?php
    while ($row = $statement->fetch()) {
    ?>
        <tr>
            <td><?= $row['first_name'] . "<br />" ?>  </td>
            <td><?= $row['last_name'] . "<br /><br />"?> </td>
            <td><?= $row['job_title'] . "<br /><br />"?> </td>
            <td><a href='orders.php?id=<?php echo $row['id']?>'>Bestellungen</a></td>
        </tr>
    <?php
    }
    ?>

</table>
