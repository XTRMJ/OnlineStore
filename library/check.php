<?php

class ejecutarSQL {
    public static function conectar(){
        if(!$con=  mysql_connect(SERVER,USER,PASS)){
            die("Error en el servidor, verifique sus datos");
        }
        if (!mysql_select_db(BD)) {
            die("Error al conectar con la base de datos, verifique el nombre de la base de datos");
        }
        /* Codificar la información de la base de datos a UTF8*/
        mysql_set_charset('utf8',$con);
        return $con;  
    }
    public static function consultar($query) {
        if (!$consul = mysql_query($query, ejecutarSQL::conectar())) {
            die(mysql_error().'Error en la consulta SQL ejecutada');
        }
        return $consul;
    }  
}

?>
</br>
<div>Validando</div>