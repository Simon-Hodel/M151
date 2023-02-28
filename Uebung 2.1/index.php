<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "northwind";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br />";

mysqli_select_db($conn, $database);

echo "Datenbank ausgewählt!<br />";

$sql = "SELECT * FROM customers WHERE job_title = 'Purchasing Representative'";
$result = $conn->query($sql);

while($record = mysqli_fetch_assoc($result)){
d($record);
}
function d ($args){
    echo "<pre>";
    var_dump($args);
    echo "</pre>";
}

if ($result->num_rows > 0) {
  echo $result->num_rows . " Resultate";
d($result);

} else {
  echo "Keine Resultate vorhanden";
}

mysqli_close($conn);
?>