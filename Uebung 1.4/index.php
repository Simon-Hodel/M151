<?php
    
    if (isset($_GET['username'])){
        $username = $_GET['username'];
        echo "Hallo {$username}!<br />";
    }
   

    if (isset($_GET['age'])) {
        $age = $_GET['age'];
        echo "Du bist {$age} Jahre alt.";
    }
?>