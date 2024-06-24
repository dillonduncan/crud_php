<?php
    function conexion(){
        $host="localhost";
        $user="root";
        $pass="";

        $bd="bdusuarios";
        $connect=mysqli_connect($host, $user,$pass);
        mysqli_select_db($connect, $bd);
        return $connect;
    }   
