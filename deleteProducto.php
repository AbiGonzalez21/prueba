<?php
include('conexion.php');
    $noProducto = $_POST['noProducto'];
$sql = "DELETE FROM producto WHERE noProducto = '$noProducto'";

$con=conectar();
if (mysqli_query($con, $sql)){
    echo "Deleting successfully";
}else{
    echo "Error deleting: " . mysqli_error($con);
}
mysqli_close($con);

header("Location: index.php");
?>
