     <form method="POST" action="?">
         <input type="text" name="pizza" placeholder="Zutaten" />
         <input type="submit" value="Absenden" />
     </form>

     <?php
        session_start();
        $zutaten = array();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            array_push($zutaten,$_POST['pizza']);
            echo "Die Pizza hat die Zutaten";
            for($i = 0;$i< count($zutaten);$i++){
                echo " {$zutaten[$i]}";
            };
        }


        if (isset($_SESSION['zutaten'])) {
            $zutaten = $_SESSION['zutaten'];
        }
        $_SESSION['zutaten'] = $zutaten;
        ?>