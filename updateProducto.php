<?php
require('conexion.php');

$noProducto = $_POST['noProducto'];
$nombreProducto = $_POST['nombreProducto'];
$precioProducto = $_POST['precioProducto'];
$unidadesProducto = $_POST['unidadesProducto'];
$descripcionProducto = $_POST['descripcionProducto'];

$con=conectar();
$sql = "UPDATE producto SET nombreProducto = '$nombreProducto', precioProducto = '$precioProducto',
        unidadesProducto = '$unidadesProducto', descripcionProducto = '$descripcionProducto' WHERE noProducto = '$noProducto'";

if (mysqli_query($con, $sql)){
    echo "Record updated successfully";
}else{
    echo "Error updating record: " . mysqli_error($con);
}
mysqli_close($con);

header("Location: index.php");
?>
