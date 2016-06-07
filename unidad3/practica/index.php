<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <title>Sopa de letras</title>
        <!-- sopa de letras -->
        <link rel="stylesheet" type="text/css" href="js/style.css">
        <script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
        <script type="text/javascript" src="js/wordfind.js"></script> 
        <script type="text/javascript" src="js/wordfindgame.js"></script>
        <script type="text/javascript" src="js/contador.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/gsdk-base.css" rel="stylesheet" />  

         <script src="js/bootstrap.min.js" type="text/javascript"></script>


    </head>
    <body  background="und1_actLud_Sopa_back.svg" >
        <div id="body">
            
            <section id="preguntas">
                <h2>Sopa de letras - AVA IEP</h2>
                             <ol>
                    <li>En el aprendizaje, <span id="p1" value="Problematizador" class="problematizador">_________</span> se considera el conflicto como generador de dinámicas y condiciones de aprendizaje.</li><br> 
                    <li>La <span id="p2" value="IEP" class="IEP">_________</span> promueve el trabajo en equipo, ayuda mutua, responsabilidad compartida, empatía.</li><br>
                    <li>La apropiación de conocimiento se genera durante toda la <span id="p3" class="investigacion">_________.</span></li><br>
                    <li>La conformación del grupo de investigación con estudiantes de las instituciones educativas desarrolla un aprendizaje <span id="p4" class="colaborativo">_________.</span></li><br>
                    <li>Los estudiantes formulan preguntas que nacen de su sentido común, dando lugar al <span id="p5" class="aprendizaje">_________</span> situado. </li><br>
                    <li>La escuela <span id="p6" class="nueva">_________</span>, convierte a los niños, niñas y jóvenes en el centro del proceso de enseñanza y aprendizaje. </li><br>
                    <li>La investigación contribuye con la <span id="p7" class="construccion">_________</span> de saber. </li> <br>
                    <li>La investigación como estrategia pedagógica facilita la formación de <span id="p8" class="ciudadanos">_________</span> más críticos. </li> <br>
                    <li>La  <span id="p9" class="ruta">_________</span> metodológica del programa Ondas es una guía para resolver preguntas de investigación.</li><br>
                    <li>Al partir de las <span id="p10" class="inquietudes">_________</span> y necesidades de los niños, niñas y jóvenes se promueve el aprendizaje significativo. </li><br>
                </ol>
                <table>
                    <tr>
                        <td><button id='solve'>Resolver el juego</button></td>
                        <td><button id='nuevo'>Juego Nuevo</button></td>
                    </tr>
                    <tr>
                        <td colspan="2"><div id="resultado"></div></td>
                    </tr>
                    <tr>
                        <td colspan="2"><center><div id='counter'></div></center></td>
                    </tr>
                </table>
                
            </section>
            <br>
            <br>
            <div id='juego'></div>
            
        </div>
        
        <script>
            var words = ['problematizador','IEP', 'investigacion','colaborativo','aprendizaje','nueva', 'construccion','ciudadanos' , 'ruta', 'inquietudes'];
            var gamePuzzle = wordfindgame.create(words, '#juego', '#Palabras');

            var puzzle = wordfind.newPuzzle(words, {height: 20, width: 20, fillBlanks: false});
            wordfind.print(puzzle);

           

            //$('#counter').countdown({startTime: "01:12:32:55"});
            $('#counter').countdown({
                stepTime: 60,
                format: 'mm:ss',
                startTime: "15:00",
                digitImages: 6,
                digitWidth: 53,
                digitHeight: 77,
                timerEnd: function() {
                    wordfindgame.solve(gamePuzzle, words);
                    $("#resultado").html("Perdiste!!!");
                    
                },
                image: "digits.png"
            });
            $('#nuevo').click(function() {
                gamePuzzle = wordfindgame.create(words, '#juego', '#Palabras');
                puzzle = wordfind.newPuzzle(words, {height: 20, width: 20, fillBlanks: false});
                wordfind.print(puzzle);
            
                $("#resultado").html("");
                $('#counter').html("");
                $('#counter').countdown({
                    stepTime: 60,
                    format: 'mm:ss',
                    startTime: "15:00",
                    digitImages: 6,
                    digitWidth: 53,
                    digitHeight: 77,
                    timerEnd: function() {
                        wordfindgame.solve(gamePuzzle, words);
                        $("#resultado").html("Perdiste!!!");
                    },
                    image: "digits.png"
                });
               for(var i=1;i<=10;i++){
                    $("#p"+i).html("_________");
                }
            });
            
             $('#solve').click(function() {
                wordfindgame.solve(gamePuzzle, words);
               
                
            });
        </script>
        
    </body>
    <!-- MODAL  instrucciones-->
       <div class="modal fade" id="masterModalins" tabindex="-1" role="dialog" aria-labelledby="masterModalLabel" aria-hidden="true">
            <div class="modal-dialog" id="modalbox2">
                 <div class="modal-content" id="modalbox2"> 
                        <div class="modal-header" id="ventanains"> 
                              <button id="btn_close" type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="img/instrucciones/ins_btn_hover_cerrar.svg" /></button>
                          <!--  <h5 class="modal-title" id="masterModalLabel" style="font-weight: bold;">...</h5> -->
                         </div> 
                 <div class="modal-body" id="ventanins2">
                 <img src="img/SopaLetrasInstrucciones-02.svg">
                  </div>
                        
                      <!-- <div class="modal-footer">
                        <button id="btn_close" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>  -->
                </div>
                <!-- 
                        /.modal-content -->
            </div>
            <!--     /.modal-dialog -->
        </div>

<script>
           
         
           //$('#btn_siguiente').button().click(function() {
            $(document).ready(function() {
                //alert($("#respuesta1").val());
                $("#masterModalins").find('.modal-body').load("instrucciones.php?id=", function()
                 {
                    $("#modalbox2").css("width", "600px");
                    $("#modalbox2").css("height", "400px");
                    $("#masterModalins").modal();
                    $("#masterModalLabel").html("Instrucciones");
                });


            });//});
           
        </script>

</html>