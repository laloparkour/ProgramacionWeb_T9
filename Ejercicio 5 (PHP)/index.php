<?php 
    /*  
        Imprima N números de la sucesión fibonacci. 
        N debe estar definido por el usuario.
    */

    include('index.view.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if (!empty($_POST['numero'])) {
            
            $numero = trim($_POST['numero']);

                if (is_numeric($numero)) {

                    $a = 0;
                    $b = 1;
                    $c = 1;

                    echo "0, 1, ";

                    for ($i=0; $i <= $numero; $i++) { 
                        $c = $a + $b;
                        echo $c . ", ";
                        $a = $b;
                        $b = $c;
                    }
                } else {
                    echo 'Solo se permiten números';
                }
                
        } else {
            echo 'Campo vacío';
        }
        
    }

?>