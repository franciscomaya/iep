<!DOCTYPE html>
<?php
include 'conexion.php';
$con = new conexion();
//$sqlite = $con->conexion();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>La pregunta, una forma de aprendizaje</title>
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
                                        <li><a href="#tab1" data-toggle="tab" style="display:none;" id="tabl1">1</a></li>
                                        <li><a href="#tab2" data-toggle="tab" style="display:none;" id="tabl2">2</a></li>
                                        <li><a href="#tab3" data-toggle="tab" style="display:none;" id="tabl3">3</a></li>
                                        <li><a href="#tab4" data-toggle="tab" style="display:none;" id="tabl4">4</a></li>
                                        <li><a href="#tab5" data-toggle="tab" style="display:none;" id="tabl5">5</a></li>
                                        <li><a href="#tab6" data-toggle="tab" style="display:none;" id="tabl6">6</a></li>
                                        <li><a href="#tab7" data-toggle="tab" style="display:none;" id="tabl7">7</a></li>
                                        <li><a href="#tab8" data-toggle="tab" style="display:none;" id="tabl8">8</a></li>
                                        <li><a href="#tab9" data-toggle="tab" style="display:none;" id="tabl9">9</a></li>
                                        <li><a href="#tab10" data-toggle="tab" style="display:none;" id="tabl10">10</a></li>
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
                                                <label for="nombres">Nombres<span style="color:red;"> *</span></label>
                                                <input class="form-control" type='text' name='nombres' id='nombres' placeholder='Ingresa tus nombres' tabindex="1">
                                                <label for="apellidos">Apellidos<span style="color:red;"> *</span></label>
                                                <input class="form-control" type='text' name='apellidos' id='apellidos' placeholder='Ingresa tus apellidos'  tabindex="2">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="identificacion">Identificación<span style="color:red;"> *</span></label>
                                                <input class="form-control" type='text' name='identificacion' id='identificacion' placeholder='Ingresa tu numero de identificación' tabindex="3">
                                                <label for="institucion">Institución<span style="color:red;"> *</span></label>
                                                <input class="form-control" type='text' name='institucion' id='institucion' placeholder='Ingresa tu institución a la que perteneces'  tabindex="4">  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab1">
                                <div class="col-lg-10 col-lg-offset-1">
                                    <label class="text-info" style="margin-top: 15px; font-size: 1.2em;"><strong>Teniendo en cuenta la siguiente historieta responda las preguntas 1 a 3</strong></label>
                                    <div class="">
                                        <img src="img/historieta.gif" alt="" class="img-responsive img-thumbnail">
                                    </div>
                                    <p class="text-danger text-justify" style="margin-top: 5px; font-size: 0.8em;">
									Tomado de:http://proyectomalala.beecocentric.com/wp-content/uploads/2015/04/mafalda3.gif
                                    </p>
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
                                    <label class="text-info" style="margin-top: 15px; font-size: 1.2em;"><strong>Responda las preguntas 4 a 6, teniendo en cuenta el siguiente texto.</strong></label><br />
                                    <p class="text-info text-justify" style="margin-top: 5px;">
                                        <p><strong><em>Curiosidad, Primer Paso Hacia el Aprendizaje</em></strong><br />
                                        Es claro que los niños son inquietos por naturaleza, siempre están observando todo y preguntando por todo. Muchas veces consideramos que esta actitud es algo inoportuna y hasta inapropiada, por tanto lo vemos como algo negativo y no nos damos cuenta, que es a partir de este deseo del niño por saber TODO que podemos iniciar el proceso de aprendizaje.</p>
<p>Si observamos el desarrollo de un niño podemos notar que el primer indicio de curiosidad es el deseo de ver todo lo que lo rodea, luego, cuando es capaz de desplazarse busca acercarse a los objetos y agarrarlos para manipularlos para conocerlos. Más adelante, cuando ya ha conocido su medio y las características de cada uno de los elementos, comienza a observar lo que sucede cuando junta dos elementos. Todo este proceso brinda valiosa información al niño que será de gran utilidad en sus aprendizajes futuros.</p>
<p>La curiosidad proporciona al niño el interés necesario para querer aprender, es indispensable para desarrollar un pensamiento científico, porque cuando al niño le agrada algo le será más fácil aprenderlo.</p>
<p>Al niño todo le produce curiosidad: los cambios de clima, las enfermedades, las acciones de los demás, etc. Son pequeños observadores con ansias de conocimiento y somos los adultos los encargados de lograr que este interés no se pierda, sino por el contrario, que sea cada vez mayor.</p>

                                    </p>
                                    <p class="text-danger text-justify" style="margin-top: 5px; font-size: 0.8em;">
                                        Tomado de: Maestra Kiddys. Momento educativo. Curiosidad el primer paso hacia el aprendizaje. http://app.kiddyshouse.com/maestra/articulos/curiosidad-primer-paso-hacia-el-aprendizaje.php
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
								    <label class="text-info" style="margin-top: 15px; font-size: 1.2em;"><strong></strong></label><br />
                                    <p class="text-info text-justify" style="margin-top: 5px;">
                                        <p><strong><em></em></strong><br />
                                        A través de la curiosidad, el niño desarrolla la capacidad de observación, propicia la formulación de preguntas y el planteamiento de hipótesis sencillas, motiva la manipulación de diferentes elementos, lleva a probar cosas nuevas y por tanto a aprender a través del ensayo y error.</p>
                                    <p class="text-danger text-justify" style="margin-top: 5px; font-size: 0.8em;">
                                    </p>    
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
                                    <p class="text-info text-justify" style="margin-top: 5px;">
                                        <strong><em>Las preguntas iniciales o espontáneas  de niñas, niños y jóvenes</em></strong><br />
                                        <p>Los estudiantes tienen una gran capacidad para hacerse preguntas y no lo hacen tan sólo para conocer el mundo, sino que en medio de este ejercicio generan un proceso de autoconstrucción de sus ideas y conceptos fundamentales y estructurales para relacionarse con la sociedad y la naturaleza. </p>
<p>Una niña(o), o joven que no investiga es muy probable que asimile los conocimientos de manera mecánica. Como consecuencia de ello, sus explicaciones y, por tanto, sus acciones serán las mismas que el sentido común ha formado en él o ella durante su vida.</p>
                                    </p>
                                    <p class="text-danger text-justify" style="margin-top: 5px; font-size: 0.8em;">
                                        Tomado de: Colciencias. Programa Ondas. Caja de herramientas. La pregunta como punto de partida.

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
								    <p class="text-info text-justify" style="margin-top: 5px;">
                                        <strong><em>¿Cómo llegan niñas, niños y jóvenes a las respuestas de lo que se preguntan?</em></strong><br />
                                        <p>El conocimiento y el saber a los cuales llegan los niños (as) y jóvenes en el Programa Ondas son resultado de la implementación de su estrategia pedagógica, con las variantes que introducen los acompañantes adultos o los mismos grupos de investigación. Así, se constituye el reto para el maestro y la maestra de convertir este proceso en su objeto de sistematización.</p>
                                    </p>
                                    <p class="text-danger text-justify" style="margin-top: 5px; font-size: 0.8em;">
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
                                    <!-- <li class="previous first"><a href="javascript:;">Primero</a></li> -->
                                    <li class="previous"><a href="javascript:;">Anterior</a></li>
                                    <!-- <li class="next last"><a href="javascript:;">Ultimo</a></li> -->
                                    <li class="next"><a href="javascript:;">Siguiente</a></li>
                                    <!--<li class="next finish" style="display:none;"><a href="javascript:;">Evaluar</a></li>-->
                                    <li class="fin" style="display: none;">
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
										$('#tabl1').css("display", "block");
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
						$('#tabl2').css("display", "block");
                    }
                }
                if (index == 3) {
                    if (res3 == 0) {
                        respuestas = respuestas + 1;
                        res3 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
						$('#tabl3').css("display", "block");
                    }
                }
                if (index == 4) {
                    if (res4 == 0) {
                        respuestas = respuestas + 1;
                        res4 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
						$('#tabl4').css("display", "block");
                    }
                }
                if (index == 5) {
                    if (res5 == 0) {
                        respuestas = respuestas + 1;
                        res5 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
						$('#tabl5').css("display", "block");
                    }
                }
                if (index == 6) {
                    if (res6 == 0) {
                        respuestas = respuestas + 1;
                        res6 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
						$('#tabl6').css("display", "block");
                    }
                }
                if (index == 7) {
                    if (res7 == 0) {
                        respuestas = respuestas + 1;
                        res7 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
						$('#tabl7').css("display", "block");
                    }
                }
                if (index == 8) {
                    if (res8 == 0) {
                        respuestas = respuestas + 1;
                        res8 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
						$('#tabl8').css("display", "block");
                    }
                }
                if (index == 9) {
                    if (res9 == 0) {
                        respuestas = respuestas + 1;
                        res9 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
						$('#tabl9').css("display", "block");
                    }
                }
                if (index == 10) {
                    if (res10 == 0) {
                        respuestas = respuestas + 1;
                        res10 = 1;
                        porcentaje = porcentaje + 9.09;
                        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
						$('#tabl10').css("display", "block");
                    }
                }
                //if (index == 11) {
                //    if (res11 == 0) {
                //        respuestas = respuestas + 1;
                //        res11 = 1;
                //        porcentaje = porcentaje + 9.09;
                //        $('#rootwizard').find('.progress-bar').css({width: porcentaje + '%'});
                //    }
                    //alert(respuestas);
                //}
                //alert(respuestas);


                // If it's the last tab then hide the last button and show the finish instead
//                if ($current >= $total) {
                if (respuestas == 10) {
                    //$('#rootwizard').find('.pager .next').hide();
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