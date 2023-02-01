
<?php
    echo("get x = var 1, y = var 2, mode = Operation (plus, minus, mal, div)");
    if (isset($_GET['x']) && ($_GET['y']) && ($_GET['mode'])){
        $_x = intval(($_GET['x']));
        $_y = intval(($_GET['y']));
        $_mode = ($_GET['mode']);
        switch($_mode){
            case 'plus':
                echo ($_x + $_y);
                break;
            case 'minus':
                echo ($_x - $_y);
                break;
            case 'mal':
                echo ($_x * $_y);
                break;
            case 'div':
                echo ($_x / $_y);
                 break;
            default:
            echo 'falscher mode';
            break;
        }

    }
   


?>
