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
        
        if (!empty($_POST['calificacion'])) {

            $calificacion = trim($_POST['calificacion']);

            if (is_numeric($calificacion)) {

                floatval($calificacion);

                if ($calificacion < 0 || $calificacion > 10) {
                    echo "La calificación ingresada es incorrecta";
                } else if ($calificacion >= 0 && $calificacion <= 3) {
                    echo "Tu calificacion es Muy deficiente";
                } else if ($calificacion > 3 && $calificacion <= 5) {
                    echo "Tu calificacion es Insuficiente";
                } else if ($calificacion > 5 && $calificacion <= 6) {
                    echo "Tu calificacion es Suficiente";
                } else if ($calificacion > 6 && $calificacion <= 7) {
                    echo "Tu calificacion es Buena";
                } else if ($calificacion > 7 && $calificacion <= 9) {
                    echo "Tu calificacion es Notable";
                } else if ($calificacion > 9 && $calificacion <= 10) {
                    echo "Tu calificacion es Sobresaliente";
                }

            } else {
                echo 'Solo se permiten números';
            }
                
        } else {
            echo 'Campo vacío';
        }
        
    }

?>