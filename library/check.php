<?php

class ejecutarSQL {
    public static function conectar(){
        if(!$con=  mysqli_connect(SERVER,USER,PASS)){
            die("Error en el servidor, verifique sus datos");
        }
        if (!mysqli_select_db($con,BD)) {
            die("Error al conectar con la base de datos, verifique el nombre de la base de datos");
        }
        /* Codificar la información de la base de datos a UTF8*/
        mysqli_set_charset($con,'utf8');
        return $con;  
    }
    public static function consultar($query) {
        if (!$consul = mysqli_query(ejecutarSQL::conectar(),$query)) {
            die(mysqli_connect_errno().'Error en la consulta SQL ejecutada');
        }
        return $consul;
    }  
}

?>
</br>
<div>Validando</div>