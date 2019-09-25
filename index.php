<?php 
$menu = "principal";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SINERGIA ECONÓMICA</title>
    <?php include('styles.php'); ?>
    <link rel="stylesheet" href="css/inicio.css">
</head>
<body>

    

    <header id="inicio">
        <?php include('menu.php'); ?>
        <div class="imagen">
            <img src="imagenes/main.jpg" alt="header Sinergia"> 
            <h2>
                <span class="izquierda">EL IMPULSO</span>
                <span class="derecha">ECONÓMICO</span>
            </h2>
            <p class="texto">
                Que tu empresa necesita con un plan a tu medida
            </p>
            <div class="container">
                <div class="cotizador">
                    <h3 class="title">
                        COTIZA TU CRÉDITO
                    </h3>
                    <p class="texto">
                        ¿CUÁNTO NECESITAS?
                    </p>
                    <div class="container_cot">
                        <div class="form-group">
                            <label for="">Monto</label>
                            <input type="range" id="monto" min="30000" max="10000000" step="10000" value="30000">
                            <span id="monto_val">$30000</span>
                        </div>
                        <div class="form-group">
                            <label for="">Plazo</label>
                            <input type="range" id="plazo" min="12" max="72" step="12" value="12">
                            <span id="plazo_val">12 Meses</span>
                        </div>    
                        <p>
                            Mensualidad $<span id="mensualidad">87,299</span>
                        </p>
                        <button id="btn_fomulario">¡SOLICÍTALO YA!</button>
                    </div>
                </div>
                <div class="whatsapp">
                    <p>
                        <i class="fab fa-whatsapp"></i>
                        SOLICITA TU CRÉDITO
                    </p>
                </div>
            </div>
        </div>
    </header>

    <main>

        <section class="galeria">
            <div class="caja">
                <img src="imagenes/1.png" alt="">
                <p>DESDE $30,000 HASTA $10'000,000</p>
            </div>
            <div class="caja">
                <img src="imagenes/2.png" alt="">
                <p>COBERTURA EN TODO MÉXICO</p>
            </div>
            <div class="caja">
                <img src="imagenes/3.png" alt="">
                <p>REQUISITOS SIMPLES</p>
            </div>
        </section>
        <section class="contacto">
            <img src="imagenes/4.jpg" alt="">
        </section>
        <section class="diferencias">
            <ul class="ventajas">
                <li><i class="fas fa-check"></i> APROBACIÓN DE INMEDIATA</li>
                <li><i class="fas fa-check"></i> POCOS REQUISITOS</li>
                <li><i class="fas fa-check"></i> ASESORÍA FINANCIERA GRATUITA</li>
                <li><i class="fas fa-check"></i> HASTA $5,000,000 DE PESOS</li>
                <li><i class="fas fa-check"></i> PLAN A LA MEDIDA DE TU EMPRESA</li>
                <li><i class="fas fa-check"></i> ATENCIÓN PERSONALIZADA</li>
            </ul>
            <ul class="desventajas">
                <li><i class="fas fa-times"></i> INDISPENSABLE BURÓ DE CRÉDITO</li>
                <li><i class="fas fa-times"></i> ARRIESGAR TU PATRIMONIO</li>
                <li><i class="fas fa-times"></i> CONTRATOS CONFUSOS</li>
                <li><i class="fas fa-times"></i> TASAS DE INTERÉS MUY ALTAS</li>
                <li><i class="fas fa-times"></i> PLAZOS MUY LARGOS</li>
                <li><i class="fas fa-times"></i> MENSUALIDADES MUY ALTAS</li>
            </ul>
        </section>
        <section class="video">
            <img src="imagenes/6.jpg" alt="">
        </section>
    </main>
 
    <?php include('footer.php'); ?>
    
    <?php include('modal_formulario.php'); ?>


<?php include('scripts.php'); ?>
    
</body>
</html>