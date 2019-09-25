<?php 
$menu = "contacto";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SINERGIA ECONÓMICA</title>
    <?php include('styles.php'); ?>
    <link rel="stylesheet" href="css/contacto.css">
</head>
<body>

    

    <header id="inicio">
        <?php include('menu.php'); ?>
    </header>

    <main> 
        <div class="imagen">
            <img src="imagenes/contacto/header.png" alt="">
            <h2 class="title">
                TENEMOS COBERTURA <span>EN TODO MÉXICO</span>
            </h2>
        </div>
        <section class="contacto">
            <div class="datos">
                <div class="bloque">
                    <img src="imagenes/contacto/1.png" alt="">
                    <p class="text">
                        800 674 9165
                    </p>
                </div>
                <div class="bloque">
                    <img src="imagenes/contacto/2.png" alt="">
                    <p class="text">
                        contacto@sinergiaeconomica.com.mx
                    </p>
                </div>
                <div class="bloque">
                    <img src="imagenes/contacto/3.png" alt="">
                    <p class="text">
                        Avenida Miguel de Cervantes<br>
                        Saavedra Granada Miguel Hidalgo<br>
                        CPP 11520<br>
                        Ciudad de México
                    </p>
                </div>
            </div>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.5283958651057!2d-98.85866928578366!3d19.302864449819804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1f74e2c629bf%3A0xeb4dbd901be09f7e!2sAv.%20Miguel%20de%20Cervantes%20Saavedra%2C%20Guadalupe%2C%20San%20Marcos%20Huixtoco%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1568943430338!5m2!1ses!2smx" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </section>
        <div class="formulario" style="background: var(--gris);">
            <?php include('formulario.php');?>                    
        </div>
    </main>
 
    <?php include('footer.php'); ?>


<?php include('scripts.php'); ?>
    
</body>
</html>