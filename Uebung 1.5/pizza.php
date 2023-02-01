<?php
//session starten
        session_start();

        $anzahl_aufrufe = 1;
        if (isset($_SESSION['anzahl_aufrufe'])) {
            $anzahl_aufrufe = $_SESSION['anzahl_aufrufe'];
        }
    
    echo "Die Seite wurde {$anzahl_aufrufe}x aufgerufen.";
    //Daten verarbeiten
    $anzahl_aufrufe++;
    //daten speichern
    $_SESSION['anzahl_aufrufe'] = $anzahl_aufrufe;
?>