<!DOCTYPE html>
<?php
include 'conexion.php';
$con = new conexion();
$nombres = "";
$apellidos = "";
$identificacion = "";
$institucion = "";
$res1 = "";
$res2 = "";
$res3 = "";
$res4 = "";
$res5 = "";
$res6 = "";
$res7 = "";
$res8 = "";
$res9 = "";
$res10 = "";
if (!isset($_POST['index'])) {
    header("Location: index.php");
} else {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $identificacion = $_POST['identificacion'];
    $institucion = $_POST['institucion'];
    $res1 = $_POST['res1'];
    $res2 = $_POST['res2'];
    $res3 = $_POST['res3'];
    $res4 = $_POST['res4'];
    $res5 = $_POST['res5'];
    $res6 = $_POST['res6'];
    $res7 = $_POST['res7'];
    $res8 = $_POST['res8'];
    $res9 = $_POST['res9'];
    $res10 = $_POST['res10'];
    $respuestas = array($res1, $res2, $res3, $res4, $res5, $res6, $res7, $res8, $res9, $res10);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Evaluación aprendiendo a conocerme</title>
        <link rel="icon" type="image/png" href="img/favicon.png" />
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/prettify.css" rel="stylesheet">
        <script src="js/jquery-latest.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.wizard.js"></script>
        <script src="js/prettify.js"></script>
        <style>
            span{
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div class="col-lg-10 col-lg-offset-1">
            <form id="form" name="form" method="POST" action="evaluar.php">
                <input type="hidden" name="index" id="index" value="index">
                <div id="rootwizard">
                    <div class="navbar">
                        <div class="navbar-header">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-default">
                                <div class="container">
                                    <ul>
                                        <li><a href="#tabd" data-toggle="tab">Datos usuario</a></li>
                                        <li><a href="#tab1" data-toggle="tab">1</a></li>
                                        <li><a href="#tab2" data-toggle="tab">2</a></li>
                                        <li><a href="#tab3" data-toggle="tab">3</a></li>
                                        <li><a href="#tab4" data-toggle="tab">4</a></li>
                                        <li><a href="#tab5" data-toggle="tab">5</a></li>
                                        <li><a href="#tab6" data-toggle="tab">6</a></li>
                                        <li><a href="#tab7" data-toggle="tab">7</a></li>
                                        <li><a href="#tab8" data-toggle="tab">8</a></li>
                                        <li><a href="#tab9" data-toggle="tab">9</a></li>
                                        <li><a href="#tab10" data-toggle="tab">10</a></li>
                                        <li><a href="#tab11" data-toggle="tab">Tu puntaje</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" style="margin-top: 10px;">
                            <div class="tab-pane" id="tabd">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <label for="nombres">
                                        <?php
                                        echo "<br>";
                                        echo "<label class='text-info'>";
                                        echo "Hola !" . $nombres . " " . $apellidos . "! ";
                                        echo "</label><br><label class='text-success'>";
                                        echo "Te explicaremos como te fue en el reto. ¡ Descubre, cuantos puntos obtuviste !";
                                        echo "</label>";
                                        ?>
                                    </label>

                                </div>
                            </div>
                            <div class="tab-pane" id="tab1">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 1.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(1); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->evaluar_respuestas(1, $res1); ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>                                
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 2.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(2); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->evaluar_respuestas(2, $res2); ?>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                            </div>
                            <div class="tab-pane" id="tab3">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 3.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(3); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->evaluar_respuestas(3, $res3); ?>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                            </div>
                            <div class="tab-pane" id="tab4">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 4.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(4); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->evaluar_respuestas(4, $res4); ?>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                            </div>
                            <div class="tab-pane" id="tab5">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 5.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(5); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->evaluar_respuestas(5, $res5); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="tab-pane" id="tab6">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 6.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(6); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->evaluar_respuestas(6, $res6); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab7">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 7.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(7); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->evaluar_respuestas(7, $res7); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab8">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 8.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(8); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->evaluar_respuestas(8, $res8); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab9">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 9.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(9); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->evaluar_respuestas(9, $res9); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab10">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 10.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(10); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->evaluar_respuestas(10, $res10); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab11">
                                <div class="col-lg-6 col-lg-offset-3">
                                    <div class="col-lg-12" style="margin-top: 10px;">
                                        <div class="table-responsive table-hover">
                                            <table class="table">
                                                <tr>
                                                    <th class="active text-center" colspan="2">
                                                        <label class="text-center text-primary">Tu resultados</label>
                                                    </th>
                                                </tr>
                                                <?php $con->puntaje($respuestas); ?>
                                            </table>
                                        </div>
                                        <span></span>
                                        <!--</div>-->

                                        <?php //$con->evaluar_respuestas(10,$res10); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <ul class="pager wizard">
                                    <!--<li class="previous first"><a href="javascript:;">Primero</a></li>-->
                                    <li class="previous"><a href="javascript:;">Anterior</a></li>
                                    <!--<li class="next last"><a href="javascript:;">Ultimo</a></li>-->
                                    <li class="next"><a href="javascript:;">Siguiente</a></li>
                                    <!--<li class="next finish" style="display:none;"><a href="javascript:;">Evaluar</a></li>-->
<!--                                    <li class="fin" style="display: none; float: right;">
                                        <input type="submit" name="enviar" id="enviar" value="Evaluar">
                                        <a href="javascript:;">Evaluar</a>
                                    </li>-->
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
<script>

    $(document).ready(function () {
        $(document).ready(function () {
            $('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-pills'});
        });
    });
</script>