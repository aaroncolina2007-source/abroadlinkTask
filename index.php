<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Menú Principal</title>

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

    .menu-container {
        background: #fff;
        border-radius: 20px;
        padding: 40px 60px;
        text-align: center;
        width: 380px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    }

    h1 {
        color: #2d3436;
        font-size: 28px;
        margin-bottom: 30px;
    }

    .menu-boton {
        display: block;
        background: #0984e3;
        color: white;
        text-decoration: none;
        margin: 15px 0;
        padding: 14px;
        border-radius: 10px;
        font-size: 18px;
        transition: 0.3s ease;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .menu-boton:hover {
        background: #0868b9;
        transform: translateY(-3px);
        box-shadow: 0 6px 18px rgba(0,0,0,0.28);
    }

    /* Botones específicos */
    .add { background: #00b894; }
    .add:hover { background: #019874; }

    .delete { background: #d63031; }
    .delete:hover { background: #b32021; }

    
</style>

</head>

<body>

<div class="menu-container">
    <h1>Gestión de Clientes</h1>

    <a href="añadir_clientes.php" class="menu-boton add">Añadir Cliente</a>
    <a href="eliminar_clientes.php" class="menu-boton delete">Eliminar Cliente</a>
    
</div>

</body>
</html>
