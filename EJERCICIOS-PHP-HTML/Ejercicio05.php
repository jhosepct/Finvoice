<!-- Crea una función llamada “cantidad_caracteres” que retorne el número de caracteres de un texto. -->
<?php
if($_POST){
    $texto = $_POST['texto'];
    $cantidad = cantidad_caracteres($texto);
}

function cantidad_caracteres($texto) {
    return strlen($texto);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <h1>Ejercicio 05</h1>
    <form action="Ejercicio05.php" method="post">
        <label for="">Ingrese Texto</label>
        <input type="text" name="texto">
        <input type="submit" value="Enviar">
    </form>
    <?php if($_POST){ ?>
    <p>La cantidad de caracteres de la palabra <b><?php echo $texto ?></b> es: <?php echo $cantidad ?></p>
    <?php } ?>
</body>

</html>