<?php
    function connection()
    {
        $mysql_server="localhost";
        $mysql_login="root";
        $mysql_password="";
        $mysql_db="szkola";
        $polaczenie=mysqli_connect($mysql_server,$mysql_login,$mysql_password,$mysql_db);;
        if(!$polaczenie)
        {
            die("Blad polaczenia: ".mysqli_connect_error());
        }
    }
?>
