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
$sql = "SELECT * FROM customers WHERE job_title = :job_title";
$statement = $conn->prepare($sql);
$statement->execute([
':job_title'=> $jobTitle
])
?>
<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Job</th>

    </tr>
    <?php
    while ($row = $statement->fetch()) {
    ?>
        <tr>
            <td><?= $row['first_name'] . "<br />" ?>  </td>
            <td><?= $row['last_name'] . "<br /><br />"?> </td>
            <td><?= $row['job_title'] . "<br /><br />"?> </td>
        </tr>
    <?php
    }
    ?>

</table>
<?php
}
?>