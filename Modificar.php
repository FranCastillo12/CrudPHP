<?php
include("./Conexion_BD.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM agenda WHERE nombre = '$id'";
    $Resultado = mysqli_query($connection, $query);
    if(mysqli_num_rows($Resultado) == 1){
        $row = mysqli_fetch_array($Resultado);
        $Nombre = $row['nombre'];
        $Apellidos = $row['apellidos'];
        $Direccion = $row['direccion'];
        $Telefono = $row['telefono'];
        $Edad = $row['edad'];
        $Altura = $row['altura'];
    }
}
    
if (isset($_POST['Modificar'])) {
    $Nombre = $_POST['input_nombre'];
    $Apellidos = $_POST['input_apellido'];
    $Direccion = $_POST['input_direccion'];
    $Telefono = $_POST['input_telefono'];
    $Edad = $_POST['input_edad'];
    $Altura = $_POST['input_altura'];

    $query = "UPDATE agenda SET
    nombre= '$Nombre',
    apellidos= '$Apellidos',
    direccion= '$Direccion',
    telefono= $Telefono,
    edad=$Edad,
    altura=$Altura
    WHERE nombre = '$id'";
    $Resultado = mysqli_query($connection, $query);
    if (!$Resultado)
        die("El query fallo");
    header("Location: ../Crud_PHP_Agenda.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Crud Agenda</title>
</head>

<body>
    <div class="container">
        <div class="Contenedor">
            <div class="card">
                <div class="card-header text-center">
                    Modificar Datos
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <form action="Modificar.php?id=<?php echo $_GET['id']?>" method="post">
                            <label for="input_nombre">Nombre</label>
                            <br>
                            <input type="text" required="true" name="input_nombre" value=<?php echo $Nombre?>>
                            <br>
                            <label for="input_apellido">Apellido</label>
                            <br>
                            <input type="text" required="true" name="input_apellido" value=<?php echo $Apellidos?>>
                            <br>
                            <label for="input_direccion">Dirección</label>
                            <br>
                            <input type="text" required="true" name="input_direccion" value=<?php echo $Direccion?>>
                            <br>
                            <label for="input_telefono">Telefono</label>
                            <br>
                            <input type="number" required="true" name="input_telefono" value=<?php echo $Telefono?>>
                            <br>
                            <label for="input_edad">Edad</label>
                            <br>
                            <input type="text" required="true" name="input_edad" value=<?php echo $Edad?>>
                            <br>
                            <label for="input_altura">Altura</label>
                            <br>
                            <input type="number" required="true" name="input_altura" value=<?php echo $Altura?>>
                            <br>
                            <br>
                            <div class="col">
                                <button type="submit" name="Modificar" class="btn btn-warning"><i class="bi bi-pencil">Modificar</i></button>
                                <a href="../Crud_PHP_Agenda.php" class="btn btn-danger"><i class="bi bi-x">Cancelar</i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>

</html>