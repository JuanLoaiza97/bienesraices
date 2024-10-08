<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/index.php">
                    <img src="/build/img/logo.svg" alt="logotipoBienesraices">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="">
                </div>

                <div class="derecha">
                    
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contactanos</a>
                    </nav>
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="">
                </div>

            </div>
            <?php  if($inicio) { ?>

                <h1>Ventas de propiedades de lujo</h1>
            <?php } ?>
        </div>
    </header>
