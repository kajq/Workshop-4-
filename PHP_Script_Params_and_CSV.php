<?php
$input = $argv[1] ;
$array_dato = [];
if (($gestor = fopen($input, "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
        array_push($array_dato, $datos);

    }
    fclose($gestor);
}
print_r($array_dato);

$output = $argv[2];
$file = fopen($output,"w+");
if($file == false){
  die("No se ha podido crear el archivo.");
}
$newfile=fopen($file.'.txt','w');//abrir archivo, nombre archivo, modo apertura
fwrite($newfile, // escribir
      $array_dato[1][0]." ".$array_dato[1][1]." live in " . $array_dato[1][3]);
echo "Tu archivo se ha guardado con el nombre: " .       $file;
fclose($file); 

?>