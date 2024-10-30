<?php 
    function connect2db() : mysqli{
        $db = mysqli_connect("localhost", "root", "", "bienesraices");

        // if($db){
        //     echo "Conexión exitosa";
        // } else {
        //     echo "Conexión fallida";
        // }
        return $db;
    }

?>