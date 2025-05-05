<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .contenedor {
            max-width: 500px;
            margin: 50px auto;
            background-color: white;
            padding: 40px;
            border: 1px solid #ccc;
            box-shadow: 0px 0px 10px #ccc;
            box-sizing: border-box;
        }

        input, textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #8faee0;
            border-radius: 3px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .btn-enviar {
            background-color: #f47b20;
            color: white;
            padding: 12px 25px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            float: right;
        }

        .mensaje {
            width: 100%;
            padding: 15px;
            margin-top: -10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border-radius: 3px;
        }

        .error {
            background-color: #fdeaea; /* fondo más suave */
            color: #a94442;
            border: 1px solid #a94442;
            font-weight: 200; /* grosor de letra más delgado */
        }

        .exito {
            background-color: #4caf50;
            color: white;
            border: 1px solid #4caf50;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <form action="recibe.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre:">
            <input type="email" name="correo" placeholder="Correo:">
            <textarea name="mensaje" placeholder="Mensaje:" rows="5"></textarea>

            <?php if (isset($_GET['error'])): ?>
                <div class="mensaje error">
                    <?php 
                        if (strpos($_GET['error'], 'nombre') !== false) echo "Por favor ingresa un nombre.<br>";
                        if (strpos($_GET['error'], 'correo') !== false) echo "Por favor ingresa un correo.<br>";
                        if (strpos($_GET['error'], 'mensaje') !== false) echo "Por favor ingresa el mensaje.<br>";
                    ?>
                </div>
            <?php elseif (isset($_GET['exito'])): ?>
                <div class="mensaje exito">Enviado Correctamente</div>
            <?php endif; ?>

            <div class="clearfix">
                <button type="submit" class="btn-enviar">Enviar Correo</button>
            </div>
        </form>
    </div>
</body>
</html>
