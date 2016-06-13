<!DOCTYPE html>
<?php
include 'conexion.php';
$con = new conexion();
//$sqlite = $con->conexion();
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
                                <a class="navbar-brand" href="#">Evaluación</a>
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" style="margin-top: 10px;">
                            <div class="tab-pane" id="tabd">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            Datos usuario
                                        </div>
                                        <div class="panel-body">
                                            <div class="col-lg-6">
                                                <label for="nombres">Nombres</label>
                                                <input class="form-control" type='text' name='nombres' id='nombres' placeholder='Ingresa tus nombres' tabindex="1">
                                                <label for="apellidos">Apellidos</label>
                                                <input class="form-control" type='text' name='apellidos' id='apellidos' placeholder='Ingresa tus apellidos'  tabindex="2">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="identificacion">Identificación</label>
                                                <input class="form-control" type='text' name='identificacion' id='identificacion' placeholder='Ingresa tu numero de identificación' tabindex="3">
                                                <label for="institucion">Institución</label>
                                                <input class="form-control" type='text' name='institucion' id='institucion' placeholder='Ingresa tu institución a la que perteneces'  tabindex="4">  
                                            </div>
                                        </div>
                                    </div>
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
                                                <?php $con->listar_respuestas(1); ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>                                
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <label class="text-info" style="margin-top: 15px; font-size: 1.2em;"><strong>Responda las preguntas 2 a 4, de acuerdo con el siguiente texto.</strong></label>
                                    <p class="text-info text-justify" style="margin-top: 5px;">
                                        <strong><em>Nelson Mandela</em></strong><br>
                                        “Diez razones por las que Mandela era un líder” recoge, además de las mencionadas, otras cualidades que suponen una prueba de su indiscutible liderazgo. La paciencia, por ejemplo, para esperar las oportunidades, demostrando visión a largo plazo. Mandela soportó 27 años de duro encierro y tardó cinco años más en ganar las elecciones. Solo entonces levantó los dos puños desafiantes que le convirtieron como el líder no solo de la raza negra, sino de todos los ciudadanos del mundo.<br>
                                        La capacidad para perdonar, que llevada al ámbito profesional implicaría aceptar los errores ajenos, le proporcionó la fidelidad de aquellos que trabajaban a su lado. Aprendió de los errores y fue cauto y generoso. Además, tenía una excelente habilidad negociadora, lo que le llevaba a alcanzar acuerdos en los que todos sentían que ganaban.
                                    </p>
                                    <p class="text-danger text-justify" style="margin-top: 5px; font-size: 0.8em;">
                                        Fuente: Ejemplos de liderazgo. Tres personajes únicos y sus lecciones para el mundo
                                        http://retos-directivos.eae.es/ejemplos-de-liderazgo-tres-personajes-unicos-y-sus-lecciones-para-el-mundo/
                                    </p> 
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 2.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(2); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->listar_respuestas(2); ?>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                            </div>
                            <div class="tab-pane" id="tab3">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <label class="text-info" style="margin-top: 15px; font-size: 1.2em;"><strong>Responda las preguntas 2 a 4, de acuerdo con el siguiente texto.</strong></label>
                                    <p class="text-info text-justify" style="margin-top: 5px;">
                                        <strong><em>Nelson Mandela</em></strong><br>
                                        “Diez razones por las que Mandela era un líder” recoge, además de las mencionadas, otras cualidades que suponen una prueba de su indiscutible liderazgo. La paciencia, por ejemplo, para esperar las oportunidades, demostrando visión a largo plazo. Mandela soportó 27 años de duro encierro y tardó cinco años más en ganar las elecciones. Solo entonces levantó los dos puños desafiantes que le convirtieron como el líder no solo de la raza negra, sino de todos los ciudadanos del mundo.<br>
                                        La capacidad para perdonar, que llevada al ámbito profesional implicaría aceptar los errores ajenos, le proporcionó la fidelidad de aquellos que trabajaban a su lado. Aprendió de los errores y fue cauto y generoso. Además, tenía una excelente habilidad negociadora, lo que le llevaba a alcanzar acuerdos en los que todos sentían que ganaban.
                                    </p>
                                    <p class="text-danger text-justify" style="margin-top: 5px; font-size: 0.8em;">
                                        Fuente: Ejemplos de liderazgo. Tres personajes únicos y sus lecciones para el mundo
                                        http://retos-directivos.eae.es/ejemplos-de-liderazgo-tres-personajes-unicos-y-sus-lecciones-para-el-mundo/
                                    </p> 
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 3.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(3); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->listar_respuestas(3); ?>
                                            </div>
                                        </div>
                                    </div>

                                </div> 
                            </div>
                            <div class="tab-pane" id="tab4">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <label class="text-info" style="margin-top: 15px; font-size: 1.2em;"><strong>Responda las preguntas 2 a 4, de acuerdo con el siguiente texto.</strong></label>
                                    <p class="text-info text-justify" style="margin-top: 5px;">
                                        <strong><em>Nelson Mandela</em></strong><br>
                                        “Diez razones por las que Mandela era un líder” recoge, además de las mencionadas, otras cualidades que suponen una prueba de su indiscutible liderazgo. La paciencia, por ejemplo, para esperar las oportunidades, demostrando visión a largo plazo. Mandela soportó 27 años de duro encierro y tardó cinco años más en ganar las elecciones. Solo entonces levantó los dos puños desafiantes que le convirtieron como el líder no solo de la raza negra, sino de todos los ciudadanos del mundo.<br>
                                        La capacidad para perdonar, que llevada al ámbito profesional implicaría aceptar los errores ajenos, le proporcionó la fidelidad de aquellos que trabajaban a su lado. Aprendió de los errores y fue cauto y generoso. Además, tenía una excelente habilidad negociadora, lo que le llevaba a alcanzar acuerdos en los que todos sentían que ganaban.
                                    </p>
                                    <p class="text-danger text-justify" style="margin-top: 5px; font-size: 0.8em;">
                                        Fuente: Ejemplos de liderazgo. Tres personajes únicos y sus lecciones para el mundo
                                        http://retos-directivos.eae.es/ejemplos-de-liderazgo-tres-personajes-unicos-y-sus-lecciones-para-el-mundo/
                                    </p>    
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 4.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(4); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->listar_respuestas(4); ?>
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
                                                <?php $con->listar_respuestas(5); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="tab-pane" id="tab6">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <label class="text-info" style="margin-top: 15px; font-size: 1.2em;"><strong>Teniendo en cuenta la historieta, responda las preguntas 6  a 8</strong></label>
                                    <div class="text-center">
                                        <img src="img/historieta.jpg" alt="Historieta" class="img-responsive img-thumbnail">
                                    </div>
                                    <p class="text-danger text-justify" style="margin-top: 5px; font-size: 0.8em;">
                                        Fuente: Quino
                                    </p>
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 6.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(6); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->listar_respuestas(6); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab7">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <label class="text-info" style="margin-top: 15px; font-size: 1.2em;"><strong>Teniendo en cuenta la historieta, responda las preguntas 6  a 8</strong></label>
                                    <div class="text-center">
                                        <img src="img/historieta.jpg" alt="Historieta" class="img-responsive img-thumbnail">
                                    </div>
                                    <p class="text-danger text-justify" style="margin-top: 5px; font-size: 0.8em;">
                                        Fuente: Quino
                                    </p>
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 7.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(7); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->listar_respuestas(7); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab8">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <label class="text-info" style="margin-top: 15px; font-size: 1.2em;"><strong>Teniendo en cuenta la historieta, responda las preguntas 6  a 8</strong></label>
                                    <div class="text-center">
                                        <img src="img/historieta.jpg" alt="Historieta" class="img-responsive img-thumbnail">
                                    </div>
                                    <p class="text-danger text-justify" style="margin-top: 5px; font-size: 0.8em;">
                                        Fuente: Quino
                                    </p>
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 8.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(8); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->listar_respuestas(8); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab9">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <label class="text-info" style="margin-top: 15px; font-size: 1.2em;"><strong>Responda las preguntas 9 y 10, de acuerdo con el siguiente texto.</strong></label>
                                    <p class="text-info text-justify" style="margin-top: 5px;">
                                        <strong><em>Martin Luther King</em></strong><br>
                                        Las lecciones de este líder que transformó América siguen aún vigentes. Tres son las principales que se destacan en el artículo “Lecciones de <em>Martin Luther King</em>” y que se han convertido en un manual a seguir por todos aquellos que tienen la aspiración de convertirse en grandes líderes.  <br>
                                        En primer lugar, demostrar el compromiso total hacia una causa es esencial para lograr el éxito en ella. Los sacrificios que supone tanto a nivel personal como profesional este compromiso con la causa muchas veces no son fáciles de asumir, lo cual es una de las razones por las que los profesionales fracasan.<br>
                                        La segunda lección está relacionada con innovar, romper las creencias establecidas como base para lograr un cambio. Muchas veces implica tomar medidas que son impopulares, pues la resistencia al cambio es un elemento común en las organizaciones. Sin embargo, cuestionarse el porqué de lo que hacemos y hacer las cosas de forma diferente es necesario para evolucionar y crecer.<br>
                                        La comunicación fue la tercera de sus virtudes. Tenía un sueño, pero no habría podido hacerlo realidad si no lo hubiera comunicado a todas las personas que tenía a su alrededor.
                                    </p>
                                    <p class="text-danger text-justify" style="margin-top: 5px; font-size: 0.8em;">
                                        Fuente: Ejemplos de liderazgo. Tres personajes únicos y sus lecciones para el mundo
                                        http://retos-directivos.eae.es/ejemplos-de-liderazgo-tres-personajes-unicos-y-sus-lecciones-para-el-mundo/

                                    </p>   
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 9.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(9); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->listar_respuestas(9); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab10">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <label class="text-info" style="margin-top: 15px; font-size: 1.2em;"><strong>Responda las preguntas 9 y 10, de acuerdo con el siguiente texto.</strong></label>
                                    <p class="text-info text-justify" style="margin-top: 5px;">
                                        <strong><em>Martin Luther King</em></strong><br>
                                        Las lecciones de este líder que transformó América siguen aún vigentes. Tres son las principales que se destacan en el artículo “Lecciones de <em>Martin Luther King</em>” y que se han convertido en un manual a seguir por todos aquellos que tienen la aspiración de convertirse en grandes líderes.  <br>
                                        En primer lugar, demostrar el compromiso total hacia una causa es esencial para lograr el éxito en ella. Los sacrificios que supone tanto a nivel personal como profesional este compromiso con la causa muchas veces no son fáciles de asumir, lo cual es una de las razones por las que los profesionales fracasan.<br>
                                        La segunda lección está relacionada con innovar, romper las creencias establecidas como base para lograr un cambio. Muchas veces implica tomar medidas que son impopulares, pues la resistencia al cambio es un elemento común en las organizaciones. Sin embargo, cuestionarse el porqué de lo que hacemos y hacer las cosas de forma diferente es necesario para evolucionar y crecer.<br>
                                        La comunicación fue la tercera de sus virtudes. Tenía un sueño, pero no habría podido hacerlo realidad si no lo hubiera comunicado a todas las personas que tenía a su alrededor.
                                    </p>
                                    <p class="text-danger text-justify" style="margin-top: 5px; font-size: 0.8em;">
                                        Fuente: Ejemplos de liderazgo. Tres personajes únicos y sus lecciones para el mundo
                                        http://retos-directivos.eae.es/ejemplos-de-liderazgo-tres-personajes-unicos-y-sus-lecciones-para-el-mundo/

                                    </p>
                                    <div class="panel panel-default" style="margin-top: 15px;">
                                        <div class="panel-heading">
                                            <strong>Pregunta 10.</strong> 
                                        </div>
                                        <div class="panel-body">
                                            <!--<div class="col-lg-10 col-lg-offset-1">-->
                                            <span><?php $con->listar_preguntas(10); ?></span>
                                            <!--</div>-->
                                            <div class="col-lg-12" style="margin-top: 10px;">
                                                <?php $con->listar_respuestas(10); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <ul class="pager wizard">
                                    <li class="previous first"><a href="javascript:;">Primero</a></li>
                                    <li class="previous"><a href="javascript:;">Anterior</a></li>
                                    <li class="next last"><a href="javascript:;">Ultimo</a></li>
                                    <li class="next"><a href="javascript:;">Siguiente</a></li>
                                    <!--<li class="next finish" style="display:none;"><a href="javascript:;">Evaluar</a></li>-->
                                    <li class="fin" style="display: none; float: right;">
                                        <!--<input type="submit" name="enviar" id="enviar" value="Evaluar">-->
                                        <a href="javascript:;">Evaluar</a>
                                    </li>
                                </ul> 
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="progress progress-striped active">
                                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
<script>
    var respuestas = 0;
    var res1 = 0;
    var res2 = 0;
    var res3 = 0;
    var res4 = 0;
    var res5 = 0;
    var res6 = 0;
    var res7 = 0;
    var res8 = 0;
    var res9 = 0;
    var res10 = 0;
    var res11 = 0;
    var porcentaje = 0;
    $(document).ready(function () {

        $('#rootwizard').bootstrapWizard({onNext: function (tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index + 1;
                var $percent = ($current / $total) * 100;

                $("#nombres").focusout(function () {
                    if ($('#nombres').val()) {
                        $('#nombres').removeAttr("title");
                        $('#nombres').removeAttr("style");
                    }
                });
                $("#apellidos").focusout(function () {
                    if ($('#apellidos').val()) {
                        $('#apellidos').removeAttr("title");
                        $('#apellidos').removeAttr("style");
                    }
                });
                $("#identificacion").focusout(function () {
                    if ($('#identificacion').val()) {
                        $('#identificacion').removeAttr("title");
                        $('#identificacion').removeAttr("style");
                    }
                });
                $("#institucion").focusout(function () {
                    if ($('#institucion').val()) {
                        $('#institucion').removeAttr("title");
                        $('#institucion').removeAttr("style");
                    }
                });

                if (index == 1) {
                    if (res1 == 0) {
                        if (!$('#nombres').val()) {
                            $('#nombres').attr("title", "Ingrese nombres");
                            $('#nombres').attr("style", "background-color:#FFC9C9;");
                            $('#nombres').focus();
                            return false;
                        } else {
                            if (!$('#apellidos').val()) {
                                $('#apellidos').attr("title", "Ingrese apellidos");
                                $('#apellidos').attr("style", "background-color:#FFC9C9;");
                                $('#apellidos').focus();
                                return false;
                            } else {
                                if (!$('#identificacion').val()) {
                                    $('#identificacion').attr("title", "Ingrese identificación");
                                    $('#identificacion').attr("style", "background-color:#FFC9C9;");
                                    $('#identificacion').focus();
                                    return false;
                                } else {
                                    if (!$('#institucion').val()) {
                                        $('#institucion').attr("title", "Ingrese institución");
                                        $('#institucion').attr("style", "background-color:#FFC9C9;");
                                        $('#institucion').focus();
                                        return false;
                                    } else {
                                        respuestas = respuestas + 1;
                                        res1 = 1;
                                        porcentaje = porcentaje + 9.09;
                                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
                                    }
                                }
                            }
                        }
                    }
                }

                if (index == 2) {
                    if (res2 == 0) {
                        respuestas = respuestas + 1;
                        res2 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
                    }
                }
                if (index == 3) {
                    if (res3 == 0) {
                        respuestas = respuestas + 1;
                        res3 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
                    }
                }
                if (index == 4) {
                    if (res4 == 0) {
                        respuestas = respuestas + 1;
                        res4 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
                    }
                }
                if (index == 5) {
                    if (res5 == 0) {
                        respuestas = respuestas + 1;
                        res5 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
                    }
                }
                if (index == 6) {
                    if (res6 == 0) {
                        respuestas = respuestas + 1;
                        res6 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
                    }
                }
                if (index == 7) {
                    if (res7 == 0) {
                        respuestas = respuestas + 1;
                        res7 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
                    }
                }
                if (index == 8) {
                    if (res8 == 0) {
                        respuestas = respuestas + 1;
                        res8 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
                    }
                }
                if (index == 9) {
                    if (res9 == 0) {
                        respuestas = respuestas + 1;
                        res9 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
                    }
                }
                if (index == 10) {
                    if (res10 == 0) {
                        respuestas = respuestas + 1;
                        res10 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
                    }
                }
                if (index == 11) {
                    if (res11 == 0) {
                        respuestas = respuestas + 1;
                        res11 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
                    }
                    //alert(respuestas);
                }
                //alert(respuestas);


                // If it's the last tab then hide the last button and show the finish instead
//                if ($current >= $total) {
                if (respuestas == 10) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .fin').show();
                    $('#rootwizard').find('.pager .fin').removeClass('disabled');
                }
//                } 
                else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }

            }});
        $('#rootwizard .fin').click(function () {
            //alert($('#form').serialize());
            $('#form').submit();
            //$('#rootwizard').find("a[href*='tab1']").trigger('click');
        });
    });
</script>