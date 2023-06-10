
<?php
include("./Conexion_BD.php");

    if(isset($_POST['Registrar'])){
        $Nombre = $_POST['input_nombre'];
        $Apellidos = $_POST['input_apellido'];
        $Direccion = $_POST['input_direccion'];
        $Telefono = $_POST['input_telefono'];
        $Edad = $_POST['input_edad'];
        $Altura = $_POST['input_altura'];
    $query = "INSERT INTO agenda(nombre,apellidos,direccion,telefono,edad,altura) 
        VALUES('$Nombre','$Apellidos','$Direccion',$Telefono,$Edad,$Altura)";
    $Resultado = mysqli_query($connection, $query);
    header("Location: ../Crud_PHP_Agenda.php");
    if (!$Resultado)
        die("El query fallo");
    }
?>