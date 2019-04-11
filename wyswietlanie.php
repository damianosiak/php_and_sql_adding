<?php

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
    $klasazformularza=$_POST['wklasa'];
    //echo $klasazformularza;
    $zapytanie="SELECT uczniowie.Imie,uczniowie.Nazwisko,klasy.Nazwa_klasy,klasy.Wychowawca FROM uczniowie,klasy WHERE uczniowie.ID_klasy=klasy.ID_klasy AND uczniowie.ID_klasy=$klasazformularza;";

    $wynik=mysqli_query($polaczenie,$zapytanie);
    //echo $wynik;
    $i=0;
    if(mysqli_num_rows($wynik)>0)
    {
        echo '<table><tr><th>Lp.</th><th>Imie</th><th>Nazwisko</th><th>Nazwa klasy</th><th>Wychowawca</th></tr>';
        while($row = mysqli_fetch_array($wynik))
        {
            $i++;
            echo "<tr><td>$i</td><td>{$row['Imie']}</td><td>{$row['Nazwisko']}</td><td>{$row['Nazwa_klasy']}</td><td>{$row['Wychowawca']}</td></tr>";
        }
        echo '</table>';
    }
	else
	{
		echo "Klasa nie zawiera uczniów";
	}
	echo "<br/><a href='index.php'><input type='button' value='Powrot do systemu' style='width:150px;height:75px'></a>";
?>