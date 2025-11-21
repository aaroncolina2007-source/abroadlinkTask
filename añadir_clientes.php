<?php
require_once 'conexion.php';

if (isset($_POST["registro"])) {
    $nombre   = $_POST['nombre'];
    $dni      = $_POST['dni'];
    $gmail    = $_POST['gmail'];
    $telefono = $_POST['telefono'];

    $insertarDatos = "INSERT INTO clientes (DNI, NOMBRE, EMAIL, TELEFONO)
                      VALUES ('$dni', '$nombre', '$gmail', '$telefono')";

    $EjecutarInsertar = mysqli_query($enlace, $insertarDatos);

    if ($EjecutarInsertar) {
        $mensaje = "Cliente añadido correctamente.";
    } else {
        $mensaje = "Error al añadir cliente: " . mysqli_error($enlace);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Clientes</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, lightblue, blue);
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #fff;
            border-radius: 15px;
            padding: 40px 50px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        h1 {
            color: #2d3436;
            margin-bottom: 30px;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #dfe6e9;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus {
            border-color: #0984e3;
            box-shadow: 0 0 5px rgba(9, 132, 227, 0.3);
            outline: none;
        }

        input[type="submit"],
        input[type="reset"] {
            width: 40%;
            padding: 10px;
            margin: 10px 5px;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        input[type="submit"] {
            background: #00b894;
            color: white;
        }

        input[type="submit"]:hover {
            background: #019874;
        }

        input[type="reset"] {
            background: red;
            color: white;
        }

        input[type="reset"]:hover {
            background: #911314;
        }

        .mensaje {
            margin-top: 20px;
            font-weight: bold;
        }

        .exito {
            color: #00b894;
        }

        .error {
            color: #d63031;
        }
        .eliminar{
            display: inline-block;
            padding: 12px 25px;
            background: #0984e3;
            color: white;
            text-decoration: none;
            font-size: 17px;
            border-radius: 8px;
            transition: 0.3s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            }
        .eliminar:hover {
            background: #0868b9;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.25);
            }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestión de Clientes</h1>
        <form action="#" name="gestion" method="post">
            <input type="text" name="nombre" placeholder="Nombre completo" required><br>
            <input type="number" name="dni" placeholder="DNI (8 dígitos)" min="10000000" max="99999999" required><br>
            <input type="email" name="gmail" placeholder="Correo electrónico" required><br>
            <input type="number" name="telefono" placeholder="Teléfono (9 dígitos)"  required><br><br>
            

            <input type="submit" name="registro" value="Registrar">
            <input type="reset" value="Restablecer">
        </form>

        <?php if (isset($mensaje)) { ?>
            <p class="mensaje <?= (strpos($mensaje, 'Cliente añadido correctamente') !== false) ? 'exito' : 'error'; ?>">

                <?= $mensaje ?>
            </p>
        <?php } ?>
        <br><br>
        <a href="index.php" class="eliminar">si deseas volver al inicio haz click aqui</a>
    </div>
</body>
</html>

























</body>