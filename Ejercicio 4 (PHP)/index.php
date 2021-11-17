<?php 
    /*  
        Solicite una calificación, muestre el nombre de la categoría de dicha calificación
            0-3: Muy deficiente
            3-5: Insuficiente
            5-6: Suficiente
            6-7: Bien
            7-9: Notable
            9-10: Sobresaliente
    */

    include('index.view.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if (!empty($_POST['c1']) || !empty($_POST['c2']) ||
            !empty($_POST['c3']) || !empty($_POST['c4']) || 
            !empty($_POST['c5']) || !empty($_POST['c6']) ||
            !empty($_POST['c7']) || !empty($_POST['c8']) ||
            !empty($_POST['c9']) || !empty($_POST['c10'])) {
            
            $c1 = trim($_POST['c1']);
            $c2 = trim($_POST['c2']);
            $c3 = trim($_POST['c3']);
            $c4 = trim($_POST['c4']);
            $c5 = trim($_POST['c5']);
            $c6 = trim($_POST['c6']);
            $c7 = trim($_POST['c7']);
            $c8 = trim($_POST['c8']);
            $c9 = trim($_POST['c9']);
            $c10 = trim($_POST['c10']);

                if (is_numeric($c1) && is_numeric($c2) &&
                    is_numeric($c3) && is_numeric($c4) &&
                    is_numeric($c5) && is_numeric($c6) &&
                    is_numeric($c7) && is_numeric($c8) &&
                    is_numeric($c9) && is_numeric($c10)) {

                    floatval($c1);
                    floatval($c2);
                    floatval($c3);
                    floatval($c4);
                    floatval($c5);
                    floatval($c6);
                    floatval($c7);
                    floatval($c8);
                    floatval($c9);
                    floatval($c10);

                    $total = $c1 + $c2 + $c3 + $c4 + $c5 + $c6 + $c7 + $c8 + $c9 + $c10;

                    echo $total;

                    $promedio = $total / 10;

                    echo $promedio;

                } else {
                    echo 'Solo se permiten números';
                }

        } else {
            echo 'Campo vacío';
        }
        
    }

?>