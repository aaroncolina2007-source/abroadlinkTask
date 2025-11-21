<?php
require_once 'conexion.php';


// Eliminar cliente si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id_cliente'])) {
    $id = $_POST['id_cliente'];

    $stmt = mysqli_prepare($enlace, "DELETE FROM clientes WHERE ID_CLIENTE = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);


   

    
}

// Obtener lista de clientes
$result = mysqli_query($enlace, "SELECT ID_CLIENTE, DNI, NOMBRE FROM clientes");







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

        select {
            width: 90%;
            padding: 10px;
            margin: 15px 0;
            border: 2px solid #dfe6e9;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        select:focus {
            border-color: #0984e3;
            box-shadow: 0 0 5px rgba(9, 132, 227, 0.3);
            outline: none;
        }

        input[type="submit"] {
            width: 50%;
            padding: 12px;
            margin-top: 15px;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            cursor: pointer;
            background: #d63031;
            color: white;
            transition: 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #b32021;
        }

        .mensaje {
            margin-top: 20px;
            font-weight: bold;
        }

        .exito { color: #00b894; }
        .error { color: #d63031; }
        .division{
            background: #fff;
            border-radius: 15px;
            padding: 40px 50px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;}
        .regresar{
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
        .regresar:hover {
            background: #0868b9;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.25);
            }
    </style>
</head>
<body>
<div class="division">
    <h1>Eliminar cliente</h1>
<form action="#" name="gestion" method="post">
    <label for="id_cliente">Selecciona un cliente:</label>
    <select name="id_cliente" id="id_cliente" required>
        <option value="">-- Selecciona DNI NOMBRE --</option>

        <?php
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='". $row["ID_CLIENTE"] ."'>"
                    . $row["DNI"] . " - " . $row["NOMBRE"] .
                    "</option>";
            }
        } else {
            echo "<option value=''>No hay clientes registrados</option>";
        }
        ?>
    </select>

    <br><br>
    <input type="submit" value="Eliminar Cliente" 
           onclick="return confirm('¿Estás seguro de eliminar este cliente?');"><br><br><br>
           <a href="index.php" class="regresar">si deseas volver al inicio haz click aqui</a>
</form>

</div>
</body>
</html>
