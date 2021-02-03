<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario contacto</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./estilos.css">
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
            <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Ingrese nombre" value="">
            <input name="correo" id="correo" type="text" class="form-control" placeholder="Ingrese Correo" value="">
            <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Ingrese Mensaje" value=""></textarea>
       
            <?php if(!empty($errores)):?>
                <div class="alert error">
                    <?php echo $errores; ?>     
                </div>
            <?php elseif($enviado): ?>
                <div class="alert success">
                    <p>Enviado correctamente</p>
                </div>
            <?php endif ?>
            <input type="submit" name="submit" class="btn btn-primary" value="enviar correo">
        </form>
    </div>
</body>
</html>