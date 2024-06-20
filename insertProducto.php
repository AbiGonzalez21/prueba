<?php
include("conexion.php");
    
    $noProducto = $_POST['noProducto'];
    $nombreProducto = $_POST['nombreProducto'];
    $precioProducto = $_POST['precioProducto'];
    $unidadesProducto = $_POST['unidadesProducto'];
    $descripcionProducto = $_POST['descripcionProducto'];
    $con=conectar();
    // echo "EL numero es: ".$numeroProducto

    $sql = "INSERT INTO producto (noProducto, nombreProducto, precioProducto, unidadesProducto, descripcionProducto)
            VALUES ($noProducto, '$nombreProducto', '$precioProducto', '$unidadesProducto', '$descripcionProducto')";

    if (mysqli_query($con, $sql)){

        echo '<script language="javascript">alert("Nueva fila creada exitosamente"); window.location.href="http://localhost/CRUDProgWeb/index.php";</script>';
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    mysqli_close($con)
?>
