<?php
include("./Conexion_BD.php");
$Resultado = mysqli_query($connection, "SELECT * FROM agenda");

echo "<table class=table>
  <thead>
    <tr>
      <th scope=col>Nombre</th>
      <th scope=col>Apellidos</th>
      <th scope=col>Direccion</th>
      <th scope=col>Telefono</th>
      <th scope=col>Altura</th>
      <th scope=col>Edad</th>
    </tr>
  </thead>
  <tbody>";
if ($Resultado) {
    while ($columna = mysqli_fetch_array($Resultado)) {
        echo '<tr>
            <td>' . $columna['nombre'] . '</td>
            <td>' . $columna['apellidos'] . '</td>
            <td>' . $columna['direccion'] . '</td>
            <td>' . $columna['telefono'] . '</td>
            <td>' . $columna['edad'] . '</td>
            <td>' . $columna['altura'] . '</td>
            <td><a href="./Acciones_BaseDatos/Eliminar.php?nombre="'.$columna['nombre'].'><button type="submit"  name="Eliminar" class="btn btn-danger"><i class="bi bi-trash"></i></button></a></td>
            <td><button type="submit" href="./Acciones_BaseDatos/Modificar.php" name="Modificar" class="btn btn-warning"><i class="bi bi-pencil"></i></button></td>        
        </tr>';

    }
    $Resultado->free();
} else {
    echo 'No Cargo';
}
echo '</tbody>
</table>';
?>