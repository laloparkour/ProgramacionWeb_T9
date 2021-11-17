<?php 
    /*  
        Solicite la edad del usuario, valide que este tenga 
        o no la edad para conducir.
    */

    include('index.view.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if (!empty($_POST['edad'])) {

            $edad = trim($_POST['edad']);

            if (is_numeric($edad)) {
                intval($edad);
                
                if ($edad >= 18) {
                    echo 'Tienes la edad para conducir';
                } else {
                    echo 'Eres muy joven para conducir';
                }

            } else {
                echo 'Solo se permiten números';
            }
                
        } else {
            echo 'Campo vacío';
        }
        
    }

?>