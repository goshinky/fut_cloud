<!DOCTYPE html>
<?php
require './conexion_face/fb_init.php';
?>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Fut Cloud: Registro</title>
        <link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet">
        <link href = "css/materialize.css" rel = "stylesheet" type = "text/css"/>
        <link href = "css/style.css" rel = "stylesheet" type = "text/css"/>
    </head>
    <body>
        <form method = "POST" action ="registro.php">
            <div class = "container ">
                <div class = "card-panel brown lighten-5">
                    <div class = "container">
                        <h4 class = "brown-text center">Registrate</h4>
                        <div class = "row">
                            <div class = "input-field col s12">
                                <input id = "rut" type = "text" class = "validate brown-text">
                                <label for = "rut">Rut : Ej. 11.111.111-1</label>
                            </div>
                            <div class = "input-field col s6">
                                <input id = "nombre" type = "text" class = "validate brown-text">
                                <label for = "nombre">Nombres :</label>
                            </div>
                            <div class = "input-field col s6">
                                <input id = "apellido"  type = "text"  class = "validate brown-text">
                                <label for = "apellido">Apellidos :</label>
                            </div>
                            <div class = "input-field col s6">
                                <input id = "email" type = "text" class = "validate brown-text">
                                <label for = "email">Email :</label>
                            </div>
                            <div class="input-field col s6">
                                <select id="sexo">
                                    <option value="" disabled selected>Seleccione sexo</option>
                                    <option value="1">Hombre</option>
                                    <option value="2">Mujer</option>
                                    <option value="3">Prefiero no especificar</option>
                                </select>
                                <label>Sexo:</label>
                            </div>
                            <div class = "center input-field col s12">
                                <input class="datepicker" id="asd" type="date">
                                <label for = "asd">Fecha :</label>
                            </div>
                            <div class = "center input-field col s12" >
                                <input id="fecha" type="text">
                            </div>
                            <div class = " center input-field col s12">
                                <input type = "submit" id = "btregistrar" class = "btn teal" value = "Registrar"/>
                            </div> 
                            <div class = "input-field col s12 center">
                                <a class="btn teal" href="<?php echo htmlspecialchars($loginUrl) ?>">Registrate con facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js" type="text/javascript"></script>
        <script src="js/init.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
        <script type="text/javascript">
            $('.datepicker').pickadate({
                selectMonths: true,
                selectYears: 100,
                firstDay: true
            });
            $(document).ready(function () {
                $('select').material_select();
            });
            $("#asd").change(function (e) {
                e.preventDefault();
                var a = $("#asd").val();
                $("#fecha").val(moment(a).format('DD-MM-YYYY'));
            });
            $("#btregistrar").click(function (e) {
                e.preventDefault();
                insertarUsuario();
            });
        </script>
    </body>      
</html>
