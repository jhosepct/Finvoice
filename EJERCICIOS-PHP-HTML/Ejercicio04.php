<!-- Dado el siguiente array de objetos obtener los datos de la persona con la mayor edad encontrada. -->
<?php
$personas = array ("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5);
$mayorEdad = 0;
$nombre = "";
foreach ($personas as $key => $value) {
    if ($value > $mayorEdad) {
        $mayorEdad = $value;
        $nombre = $key;
    }
}
echo "La persona con mayor edad es $nombre con $mayorEdad años";
?>