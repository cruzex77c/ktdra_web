<!DOCTYPE html>
<html lang="es-mex">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regitro</title>
    <link rel="stylesheet" href="views/css/config.css">
    <link rel="stylesheet" href="../css/registro.css">
</head>
<body>
    <!--FORMULARIO-->
    <div class="logo">
        <a href="#" class="ktdra-logo" title="KTDRA"></a>
    </div>
    <div class="container">
        <div class="login_facebook">
            <button type="button" class="botton-facebook">INICIA CON FACEBOOK</button>
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
                <label for="fecha">Fecha de nacimiento</label>
                <input type="text" class="usuario" placeholder="">
            </div>
            <div class="form-group">
                <label class="contenedor">Hombre
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="contenedor">Mujer
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
                <label class="contenedor">No binario
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="form-group">
                <label class="contenedor">Compartir mis datos de registro con los proveedores de contenido de KTDRA para
                    fines de marketing.
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                </label>
            </div>
        </form>

    </div>
</body>
</html>