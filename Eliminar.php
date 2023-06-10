<?php
include("./Conexion_BD.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM agenda WHERE nombre = '$id'";
    $Resultado1 = mysqli_query($connection, $query);
    if (!$Resultado1)
        die("El query fallo");
	header("Location: ../Crud_PHP_Agenda.php");
}
?>