<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/Nav.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/Inisesion.css">
        <title>Registro</title>
    </head>
    <body style="font-family: 'Roboto', sans-serif; padding:20px ;background: linear-gradient(#51D1F6,#00AAE4,#3b9fc2" )>
        <?php include "Clases/Navegador.php"; ?>
        <div style="min-height: 100px;">
            
            <img src="img/Icono.svg" width="10.6%" height="auto" style="float: left;">
            <h1 style="color: black; margin: 20px 20px; padding:20px; float:left">Registro
        </div>
        <div class="container-all">
            <div class="ctn-form">
                <img src="img/image2s.png" width="100%" height="auto" class="logo" alt="">
                <h1 style="text-align: center;">Registro</h1>
                <form>
                    <!--Datos Personales-->
                    <label>Email</label>
                    <input type="email" id="mail" name="email" required>
                    <label>Telefono</label>
                    <input type="text" name="">
                    <label>Contraseña</label>
                    <input type="password" name="password" required>
                    <!--Genero-->
                    <label style="text-align: center;">Genero</label>
                    <hr>
                    <label for="male">Masculino</label>
                    <input type="radio" id="male" name="gender" value="Hombre">
                    <label for="female">Femenino</label>
                    <input type="radio" id="female" name="gender" value="Mujer">
                    <!--Datalist ,lista plegable-->
                    <label for="browser">Selecciona tu preferencia</label>
                    <select id="browser">
                        <option value="Musica">Musica</option>
                        <option value="Peliculas">Peliculas</option>
                        <option value="Documentos">Documentos</option>
                        <option value="Programas">Programas</option>
                    </select>
                    
                    <!--Region-->
                    <label style="text-align: center;" for="male">Seleccion de region</label>
                    <hr>
                    <label for="male">Managua</label>
                    <input type="radio" id="region" name="gender" value="Hombre">
                    <label for="male">Carazo</label>
                    <input type="radio" id="region" name="gender" value="Hombre">
                    <label for="male">Leon</label>
                    <input type="radio" id="region" name="gender" value="Hombre">
                    <label for="male">Costa Atlantica</label>
                    <input type="radio" id="region" name="gender" value="Hombre">
                    <!--Terminos-->
                    <label style="text-align: center;" for="male">Acepta Términos y Condiciones</label>
                    <hr>
                    <input type="radio" id="terminos" name="terminos" value="terminos"><br><br><br>
                    <textarea name="comentarios" align="center" rows="10" cols="60" placeholder="Escribe aqui tus comentarios"></textarea>
                    <input type="submit" name="iniciar">
                </form>
            </div>
            <div class="ctn-text">
                <div class="capa"></div>
                <h1 class="text-description"></h1><br>
                <p class="text-description"></p>
            </div>
        </div>
        <div>
            <?php
                include "Clases/footer.php";
            ?>
        </div>
    </body>
</html>