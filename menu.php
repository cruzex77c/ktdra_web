<div class="main-menu <?php echo ($menu == 'principal') ? 'animed-hide' : ''; ?>" id="main-menu">
    <div class="logo">
        <a href="./"><img src="imagenes/logoh.png" alt=""></a>
    </div>
    <ul class="wrap-menu">
        <li class="sub-menu <?php echo ($menu == 'principal') ? 'active' : ''?>" data-rel="inicio">
            <a href="./">INICIO</a>
        </li>
        <li class="sub-menu <?php echo ($menu == 'como') ? 'active' : ''?>" data-rel="funciona">
            <a href="como-funciona.php">¿CÓMO FUNCIONA?</a>
        </li>
        <li class="sub-menu <?php echo ($menu == 'contacto') ? 'active' : ''?>"" data-rel="contacto">
            <a href="contacto.php">CONTACTO</a>
        </li> 
    </ul>
    <div class="btn-menu">
        <i class="fas fa-bars" id="btn-menu"></i>
    </div>
</div>