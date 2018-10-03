<?php
$input = $argv[1] ;
$array_dato = [];
if (($gestor = fopen($input, "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
        array_push($array_dato, $datos);

    }
    fclose($gestor);
}

$output = $argv[2];
$newfile=fopen($output.'.txt','w');//abrir archivo, nombre archivo, modo apertura
for ($i=1; $i < count($array_dato); $i++) { 
    fwrite($newfile, // escribir
      $array_dato[$i][0]." ".$array_dato[$i][1]." live in " . $array_dato[$i][3] . "\r\n");
}

echo "Tu archivo se ha guardado con el nombre: " . $output;
fclose($newfile); 

?>