<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hoja de trabajo #1</title>
    <link rel="stylesheet" href="mystyle.css"/>
</head>
<body>
    <h1>La tienda #1 de Guatemala</h1>
    <p>Encontrarás lo mejor de Guatemala en la sección de ropa, calzado, jeans, etc</p>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Categorías</a>
        <a href="#">Contacto</a>
        <a href="#">Misión - Visión</a>
    </nav>
    <br/>

    <div>
        @section('content')
        @show
    </div>

    <?php
    // Arreglo con la información de los productos
    $productos = array(
        array("cantidad" => 4, "producto" => "Nike Air Force 1", "precio" => "Q650", "imagen" => "nikes.jpg"),
        array("cantidad" => 7, "producto" => "Camisa Formal", "precio" => "Q300", "imagen" => "camisa.jpg"),
        array("cantidad" => 8, "producto" => "Jeans pachucos", "precio" => "Q200", "imagen" => "jeans.jpg")
    );
    ?>

    <table>
        <tr>
            <th>Cantidad</th>
            <th>Producto</th>
            <th>Precio</th>
        </tr>
        <?php foreach ($productos as $producto) { ?>
            <tr>
                <td><?php echo $producto["cantidad"]; ?></td>
                <td>
                    <a href="producto.php?nombre=<?php echo urlencode($producto["producto"]); ?>">
                        <?php echo $producto["producto"]; ?>
                    </a>
                </td>
                <td><?php echo $producto["precio"]; ?></td>
            </tr>
        <?php } ?>
    </table>

    <?php
    // Verificación de inicio de sesión
    $usuario_autenticado = false;

    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Verificar las credenciales (esto es solo un ejemplo, debe implementarse de manera segura)
        if ($_POST['username'] === 'usuario' && $_POST['password'] === 'contraseña') {
            $usuario_autenticado = true;
        }
    }

    if ($usuario_autenticado) {
        echo '<p>Bienvenido, Usuario</p>';
        echo '<a href="logout.php">Cerrar sesión</a>';
    } else {
        ?>
        <form method="post" action="">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">
            <br>
            <input type="submit" value="Iniciar sesión">
        </form>
    <?php } ?>

    <div class="nikes">
        <img src="nikes.jpg" alt="Nike Air Force 1"/>
    </div>
    <a href="productos.php">Ver productos</a>
</body>
</html>