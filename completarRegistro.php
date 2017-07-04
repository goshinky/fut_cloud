<!DOCTYPE html>
<?php
require './conexion_face/fb_init.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset = "UTF-8">
        <title>Fut Cloud: Completar Registro</title>
        <link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet">
        <link href = "css/materialize.css" rel = "stylesheet" type = "text/css"/>
        <link href = "css/style.css" rel = "stylesheet" type = "text/css"/>
    </head>
    <body>
        <form method = "POST" action ="completarRegistro.php" >
            <div class = "container ">
                <div class = "card-panel brown lighten-5">
                    <div class = "container">
                        <h4 class = "brown-text center">Completa tu registro</h4>
                        <div class = "row">
                            <div class = "input-field col s12">
                                <input required="true"  id = "rut" type = "text" class = "validate brown-text">
                                <label for = "rut">Rut : Ej. 11.111.111-1</label>
                            </div>
                            <div class = "input-field col s6">
                                <input id = "nombre" type = "text" readonly="true" value="<?php echo $_SESSION['usuario']["nombre"] ?>" class = "validate brown-text">
                                <label for = "nombre">Nombres :</label>
                            </div>
                            <div class = "input-field col s6">
                                <input id = "apellido"  type = "text" readonly="true" value="<?php echo $_SESSION['usuario']["apellido"] ?>"  class = "validate brown-text">
                                <label for = "apellido">Apellidos :</label>
                            </div>
                            <div class = "input-field col s6">
                                <input id = "email" type = "text" value="<?php echo $_SESSION['usuario']["email"] ?>" class = "validate brown-text">
                                <label for = "email">Email :</label>
                            </div>
                            <div class = "input-field col s6">
                                <input id = "sexo" readonly="true" type = "text" value="<?php echo $_SESSION['usuario']["sexo"] ?>" class = "validate brown-text">
                                <label for = "sexo">Sexo :</label>
                            </div>
                            <div class = "center input-field col s12">
                                <input class="datepicker" id="asd" type="date">
                                <label for = "asd">Fecha :</label>
                            </div>
                            <div class = "center input-field col s12" >
                                <input id="fecha" type="text">
                            </div>
                            <div class = " center input-field col s12">
                                <input type = "submit" id = "btcompletar" class = "btn teal" value = "Completar Registro"/>
                            </div> 
                            <div class = "input-field col s12 center">
                                <a class="btn teal" href="conexion_face/logout.php">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js" type="text/javascript"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
        <script src="js/init.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $('.datepicker').pickadate({
                    selectMonths: true,
                    selectYears: 100,
                    firstDay: true
                });
                $("#btcompletar").click(function (e) {
                    e.preventDefault();
                    completarRegistro();
                });
                $("#asd").change(function (e) {
                    var a = $("#asd").val();
                    $("#fecha").val(moment(a).format('DD-MM-YYYY'));
                });
            });
        </script>
    </body>
</html>
