<!DOCTYPE html>
<?php
require 'conexion_face/fb_init.php';
?>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Fut Cloud</title>
        <link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet">
        <link href = "css/materialize.css" rel = "stylesheet" type = "text/css"/>
        <link href = "css/style.css" rel = "stylesheet" type = "text/css"/>
    </head>
    <body class = "brown lighten-5">
        <form method = "POST" action = "index.php">
            <div class = "container ">
                <div class = "card-panel brown lighten-5">
                    <div class = "container">
                        <h4 class = "brown-text"></h4>
                        <div class = "row">
                            <div class = "input-field col s12">
                                <input id = "user" type = "text" class = "validate brown-text">
                                <label for = "user">Usuario :</label>
                            </div>
                            <div class = "input-field col s12">
                                <input id = "pass" type = "text" class = "validate brown-text">
                                <label for = "pass">Contraseña :</label>
                            </div>
                            <div class = "input-field col s12 center">
                                <input type = "submit" id = "btagregar" class = "btn teal" value = "Ingresar"/>
                            </div>
                            <p>¿No tienes una cuenta aun?<br>Registrate <a style="color: #00897b" href="Registro.php">Aqui</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.min.js" type="text/javascript"></script>
        <script src="js/init.js" type="text/javascript"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
        <script type="text/javascript">
        </script>
    </body>
</html>