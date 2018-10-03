<?php
$input = $argv[1] ;
$array_dato = [];
if (($gestor = fopen($input, "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
        array_push($array_dato, $datos);

    }
    fclose($gestor);
}

print_r($array_dato)

?>