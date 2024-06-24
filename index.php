<?php
    include('conexion.php');
    $con=conexion();
    $sql="SELECT * FROM TUsuarios";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Usuarios</title>
</head>

<body>
    <div>
        <form action="post">
            <h1>Crear usuario</h1>

            <input type="text" name="numdoc" placeholder="Numero de documento">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="text" name="username" placeholder="Nombre de usuario">
            <input type="text" name="contraseña" placeholder="Contraseña">

            <button type="submit" value="Agregar usuario" />
        </form>
    </div>

    <div>
        <h2>Usuarios registrados</h2>

        <table>
            <thead>
                <tr>
                    <th>Numero documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nombre usuario</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th><?= $row['numDocUsuario'] ?></th>
                    <th><?= $row['NombreUsuario'] ?></th>
                    <th><?= $row['ApellidoUsuario'] ?></th>
                    <th><?= $row['UserNameUsuario'] ?></th>
                    <th><?= $row['ContraseñaUsuario'] ?></th>
                    <th>
                        <a href="">Editar</a>
                        <a href="">Eliminar</a>
                    </th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>