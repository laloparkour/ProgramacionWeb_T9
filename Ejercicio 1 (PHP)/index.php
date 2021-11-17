<?php 
    /*  
        Solicite al usuario capturar su nombre utilizando form, 
        al hacerlo ejecute un action que imprima el nombre al usuario.
    */

    include('index.view.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if (!empty($_POST['nombre'])) {
            $nombre = trim($_POST['nombre']);
            echo '<h3>Tu nombre es: ' . $nombre . '</h3>';
        }
        
    }

?>