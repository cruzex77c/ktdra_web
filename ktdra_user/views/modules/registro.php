<!DOCTYPE html>
<html lang="es-mex">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regitro</title>
    <link rel="stylesheet" href="../../../css/config.css">
    <link rel="stylesheet" href="../css/registro.css">
</head>
<body>
    <!--FORMULARIO-->
    <div class="logo">
        <a href="#" class="ktdra-logo" title="KTDRA"></a>
    </div>
    <div class="container">
        <div class="login_facebook">
            <a href="#" class="btn botton-facebook">REGÍSTRATE CON FACEBOOK</a>
        </div>
        <div class="divider">
            <strong class="divider-title">o</strong>
        </div>

        <form class="formulario">
            <div class="texto-centrado">
                <h2>Registrate con tu direccion de email</h2>
            </div>
            <div class="form-group">
                <input type="email" class="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="email" class="email" placeholder="Confirmar email">
            </div>
            <div class="form-group">
                <input type="password" class="password" placeholder="Contraseña">
            </div>
            <div class="form-group">
                <input type="text" class="usuario" placeholder="¿Cómo te llamas?">
            </div>
            <div class="form-group">
                <label for="fecha" class="fecha-nacimiento">Fecha de nacimiento</label>
                <div class="form-fecha">
                    <input type="number" class="dia" placeholder="Día" max="31" maxlength="2" min="1" pattern="[0-9]">
                    <select name="" id="" class="mes" placeholder="Mes">
                        <option value="" selected="selected">Mes</option>
                        <option value="01">Enero</option>
                        <option value="02">Febrero</option>
                        <option value="03">Marzo</option>
                        <option value="04">Abril</option>
                        <option value="05">Mayo</option>
                        <option value="06">Junio</option>
                        <option value="07">Julio</option>
                        <option value="08">Agosto</option>
                        <option value="09">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                    </select>
                    <input type="number" class="yers" placeholder="Año" min="1900" max="2006" maxlength="4" pattern="[0-9]">
                </div>
            </div>
            <div class="form-group">
                <label class="contenedor">Hombre
                    <input type="radio" name="radio">
                    <span class="checkmark-radio"></span>
                </label>
                <label class="contenedor">Mujer
                    <input type="radio" name="radio">
                    <span class="checkmark-radio"></span>
                </label>
                <label class="contenedor">No binario
                    <input type="radio" name="radio">
                    <span class="checkmark-radio"></span>
                </label>
            </div>
            <div class="form-group">
                <label class="contenedor">Compartir mis datos de registro con los proveedores de contenido de KTDRA para
                    fines de marketing.
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="box-cache">

            </div>
            <div class="terminos-registro">
                <p>
                    Al hacer click en Registrarse, aceptas los
                    <a href="#">Terminos de Condiciones de Uso</a>
                    de KTDRA.
                </p>
                <br>
                <p>
                    Para obtener más información sobre cómo KTDRA
                    recopila, utiliza, comparte y protege sus datos
                    personales. Lea la <a href="#">Politica de Privacidad</a>
                    de KTDRA.
                </p>
            </div>
            <div class="enviar-registro">
                <a href="#" class="btn btn-aceptar">REGÍSTRATE</a>
                <p>¿Ya tienes una cuenta?<a href="../../index.php">Iniciar sesión</a></p>
            </div>
        </form>

    </div>
</body>
</html>