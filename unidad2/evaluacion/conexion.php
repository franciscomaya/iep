<?php

class conexion extends SQLite3 {

    var $con;

    function __construct() {
        $this->open('bd/evaluacion_ova.db');
    }

    function conexion() {
        $con = new conexion();
        if (!$con) {
            echo $con->lastErrorMsg();
        } else {
            echo $con->lastErrorMsg();
        }
    }

    function listar_preguntas($id) {
        $con = new conexion();
        if (!$con) {
            echo $con->lastErrorMsg();
        } else {
            $sql = "SELECT * FROM preguntas WHERE id='" . $id . "'";
            $ret = $con->query($sql);
            if ($ret) {
                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                    echo $row['pregunta'];
                }
            } else {
                echo $con->lastErrorMsg();
            }
            $con->close();
        }
    }

    function listar_respuestas($id) {
        $con = new conexion();
        if (!$con) {
            echo $con->lastErrorMsg();
        } else {;
            $sql = "SELECT * FROM respuestas WHERE preguntas_id='" . $id . "'";
            $ret = $con->query($sql);
            if ($ret) {
                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                    $sel = "";
                    if ($row['literalRespuesta'] == "A") {
                        $sel = "checked";
                    }
                    echo "<input type='radio' id='res$id'name='res$id' value='" . $row['literalRespuesta'] . "' $sel />";
                    echo "<strong>";
                    echo "  " . $row['literalRespuesta'];
                    echo ".</strong>";
                    echo "  " . $row['respuesta'];
                    echo "<br>";
                }
            } else {
                echo $con->lastErrorMsg();
            }
            $con->close();
        }
    }

    function evaluar_respuestas($id, $res) {
        $con = new conexion();
        $ide = "";
        $pregunta = "";
        $respuesta = "";
        $acerto = "Incorrecto!";
        $literal = "";
        $respuestas = "";
        $retro = "";
        $msj = "";
        if (!$con) {
            echo $con->lastErrorMsg();
        } else {
            $sql = "SELECT * FROM preguntas WHERE id='" . $id . "'";
            $ret = $con->query($sql);
            if ($ret) {
                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                    $ide = $row['id'];
                    $pregunta = $row['pregunta'];
                    $respuesta = $row['respuesta'];
                }
                $sql = "SELECT * FROM respuestas WHERE literalRespuesta='" . $res . "' AND preguntas_id='" . $id . "'";
                $ret = $con->query($sql);
                if ($ret) {
                    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                        $literal = $row['literalRespuesta'];
                        $respuestas = $row['respuesta'];
                        $retro = $row['retroalimentacion'];
                    }
                    $msj = "si";
                } else {
                    echo $con->lastErrorMsg();
                }
            } else {
                echo $con->lastErrorMsg();
            }
            if ($msj == "si") {
                if ($res == $respuesta) {
                    $acerto = "Correcto!";
                }
                echo $acerto;
                echo "<br><br>";
                echo "<strong>Respuesta seleccionada: </strong>";
                echo $literal . ". " . $respuestas;
                echo "<br>";
                echo "<strong>Retroalimentación: </strong>" . $retro;
                echo "<br>";
            } else {
                echo $con->lastErrorMsg();
            }
            $con->close();
        }
    }

    function puntaje($respuestas) {
        $con = new conexion();
        $id = 1;
        $res = "";
        $cont = 0;
        $class = "danger";
        if (!$con) {
            echo $con->lastErrorMsg();
        } else {
            for ($i = 0; $i <= 9; $i++) {
                $id = 1 + $i;
                $res = $respuestas[$i];
                $respuesta = "";
                $sql = "SELECT * FROM preguntas WHERE respuesta='" . $res . "' AND id='" . $id . "'";
                $ret = $con->query($sql);
                if ($ret) {
                    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                        $respuesta = $row['respuesta'];
                    }
                    //echo $res."=".$respuesta."<br>";
                    if ($res == $respuesta) {
                        $cont++;
                    }
                } else {
                    echo $con->lastErrorMsg();
                }
            }
            if ($cont > 5 && $cont < 7) {
                $class = "warning";
            } elseif ($cont > 6) {
                $class = "success";
            }
            echo "<tr>";
            echo "<th class='$class text-center' colspan='2'>";
            echo "<label class='text-center text-$class'> Respuestas conrrectas $cont / 10 preguntas</label>";
            echo "</th>";
            echo "</tr>";
            $con->close();
        }
    }
}
