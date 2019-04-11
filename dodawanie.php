<?php
    $imiep=$_POST['dimie'];
    $nazwiskop=$_POST['dnazwisko'];
    $klasap=$_POST['dklasa'];

    $zapytanie="INSERT INTO uczniowie (ID_ucznia,Imie,Nazwisko,ID_klasy) VALUES ('NULL','$imiep','$nazwiskop','$klasap');";
            
    /*Polaczenie z baza*/
        
        $mysql_server="localhost";
        $mysql_login="root";
        $mysql_password="";
        $mysql_db="szkola";
        $polaczenie=mysqli_connect($mysql_server,$mysql_login,$mysql_password,$mysql_db);
        if(!$polaczenie)
        {
            die("Blad polaczenia: ".mysqli_connect_error());
        }

    /* */
    if(mysqli_query($polaczenie,$zapytanie))
    {
        echo "Pomyślnie dodano ucznia <br/>";
        echo "$imiep, $nazwiskop, $klasap";
    }
    else
    {
        echo "Błąd w dodawaniu ucznia: " . $zapytanie . "<br/>" . mysqli_error($zapytanie);
    }
    echo "<br/><a href='index.php'><input type='button' value='Powrot do systemu' style='width:150px;height:75px'></a>";
?>