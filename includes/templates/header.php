<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamo Deluxe</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>

<header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
    <div class="contenedor contenido-header">
        <div class="barra">
            <a href="/index.php">
                <img src="/build/img/logocoche.png" alt="logotipo-coche">
            </a>  
          
            <div class="mobile-menu">
                <img src="/build/img/barras.svg" alt="icono menu resposive">
            </div>

            <div class="derecha">
               
                <nav class="navegacion">
                     <a href="Nosotros.php">Nosotros</a>
                     <a href="Anuncios.php">Anuncios</a>
                     <a href="Blog.php">Blog</a>
                     <a href="Contacto.php">Contacto</a>
                </nav>

            </div>          
        </div><!--cierre barra-->
        <?php if($inicio) { ?>
            <h1>Venta y Alquiler de vehiculos de lujo</h1>
        <?php } ?>
    </div>
</header>