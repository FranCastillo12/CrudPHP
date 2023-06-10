<?php require("./Acciones_BaseDatos/Conexion_BD.php");
$Resultado = mysqli_query($connection, "SELECT * FROM agenda"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Crud Agenda</title>
</head>

<body>
    <div class="container">
        <div class="Contenedor">
            <div class="card">
                <div class="card-header text-center">
                    Crud Agenda
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <form action="./Acciones_BaseDatos/Crud_Agenda.php" method="post">
                            <label for="input_nombre">Nombre</label>
                            <br>
                            <input type="text" required="true" name="input_nombre">
                            <br>
                            <label for="input_apellido">Apellido</label>
                            <br>
                            <input type="text" required="true" name="input_apellido">
                            <br>
                            <label for="input_direccion">Dirección</label>
                            <br>
                            <input type="text" required="true" name="input_direccion">
                            <br>
                            <label for="input_telefono">Telefono</label>
                            <br>
                            <input type="number" required="true" name="input_telefono">
                            <br>
                            <label for="input_edad">Edad</label>
                            <br>
                            <input type="text" required="true" name="input_edad">
                            <br>
                            <label for="input_altura">Altura</label>
                            <br>
                            <input type="number" required="true" name="input_altura">
                            <br>
                            <br>
                            <div class="col">
                                <button type="submit" name="Registrar" class="btn btn-success"><i class="bi bi-save">
                                        Registrar</i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div>
                <table class=table>
                    <thead>
                        <tr>
							<th scope=col>Id</th>
                            <th scope=col>Nombre</th>
                            <th scope=col>Apellidos</th>
                            <th scope=col>Direccion</th>
                            <th scope=col>Telefono</th>
                            <th scope=col>Altura</th>
                            <th scope=col>Edad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($Resultado) {
                            while ($columna = mysqli_fetch_array($Resultado)) { ?>
                                <tr>
									<td>
                                        <?php echo $columna['id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $columna['nombre'] ?>
                                    </td>
                                    <td>
                                        <?php echo $columna['apellidos'] ?>
                                    </td>
                                    <td>
                                        <?php echo $columna['direccion'] ?>
                                    </td>
                                    <td>
                                        <?php echo $columna['telefono'] ?>
                                    </td>
                                    <td>
                                        <?php echo $columna['edad'] ?>
                                    </td>
                                    <td>
                                        <?php echo $columna['altura'] ?>
                                    </td>
                                    <td><a href="./Acciones_BaseDatos/Eliminar.php?id=<?php echo $columna['id']?>">
                                            <i class="bi bi-trash btn btn-danger"></i></a>
                                    </td>
                                    <td><a href="./Acciones_BaseDatos/Modificar.php?id=<?php echo $columna['id']?>" class="btn btn-warning"><i class="bi bi-pencil"></i></a></td>
                                </tr>
                                <?php
                            }
                            $Resultado->free();
                        } else {
                            echo 'No Cargo';
                        }
                        ?>
                    </tbody>
                </table>
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