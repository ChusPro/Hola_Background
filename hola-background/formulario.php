<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FavIcon el que se ve en la pestaña del navegador -->
    <link rel="icon" href="img/promotv144.png">
    <title>Hola Background</title>
    <!--Agregamos nuestro CSS-->
    <link href="css/index.css" rel="stylesheet" />
     <!--Agregamos Font Awesome desde un CDN. Tamb ién se puede hacer por @import en CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Header. esto se insertará dinámicamente con Javascript -->
    <header>
        <!--Etiqueta semántica para añadir un menú de navegación de la página -->
        <nav>
            <a href="index.html">
                <i class="fa-solid fa-house"> </i> Inicio
            </a>
            <a href="contacto.html">
                Contacto
            </a>
            <a href="oferta.html">
                Oferta
            </a>
            <a href="alineamiento.html">
                Alineamiento v y h
            </a>
        </nav>
    </header>
    <div class="background">
        
    
    </div>
    <?php
        echo "<br><br><br><hr><h1>Hola Mundo</h1>";
        //echo json_encode($_SERVER);
        echo "<h2>Mehas llamado por el metodo ".$_SERVER['REQUEST_METHOD']."</h2>";
    ?>
    
</body>

</html>