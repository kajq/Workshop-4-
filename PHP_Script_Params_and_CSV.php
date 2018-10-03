<?php
$input = $argv[1] ;
if (($gestor = fopen($input, "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
        $numero = count($datos);
        for ($c = 0; $c < $numero; $c++) {
            if ($datos[$c] <> "") {
                echo $datos[$c] . " ";
                
            } else {
                echo "\n";
            }
        }
        echo "\n";
    }
    fclose($gestor);
}

?>