<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="container">
        <div id="menu">
            <div id="napis">
                .::Zarządzanie klasą::.
            </div>
            <hr style="border-color:darkgrey" />
            <div id="przyciski">
                <input type="button" class="przycisk" value="Dodaj ucznia" onclick="wyswietl_dodawanie();">
                <input type="button" class="przycisk" value="Usuń ucznia" disabled>
                <input type="button" class="przycisk" value="Wyświetl klasę" onclick="wyswietlanie();">
            </div>
        </div>
        <br/><hr/>
        <div id="paneldzialania">
        </div>
        <div id="testowy"></div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <script>
        function wyswietl_dodawanie()
        {
            var menudodawania="<div style='width:25%;height:30%;margin:auto;background-color:grey;border-radius:3%;border-style:solid;border-color:darkgrey;'><form action='dodawanie.php' method='POST'><div style='width:100%;font-size:20px;color:lightgray;font-weight:bold;text-align:center;'>.::Dodawanie ucznia::.</div><hr style='border-color:darkgrey;'/><div style='width:40%;float:left;'><label for='dimie'>Imię ucznia: </label><br/><label for='dnazwisko'>Nazwisko ucznia: </label><br/><label for='listaklas'>Klasa: </label><br/></div><div style='width:60%;float:left;text-align:right;'><input type='text' id='dimie' name='dimie' required style='width:95%;'><br/><input type='text' id='dnazwisko' name='dnazwisko' required style='width:95%;'><br/><select name='dklasa' required style='width:95%;'><option value='1'>1A</option><option value='2'>1B</option><option value='3'>2A</option><option value='4'>2B</option><option value='5'>3A</option><option value='6'>3B</option></select><br/></div><div style='width:100%;clear:both;text-align:center;'><br/><input type='submit' value='Dodaj' style='width:50%;'></div></form></div>"
            paneldzialania.innerHTML=menudodawania;
        }
        
        function wyswietlanie()
        {
            var menuwyswietlania="<div style='width:25%;height:30%;margin:auto;background-color:grey;border-radius:3%;border-style:solid;border-color:darkgrey;'><form action='wyswietlanie.php' method='POST'><div style='width:100%;font-size:20px;color:lightgray;font-weight:bold;text-align:center;'>.::Wyświetlanie klasy::.</div><hr style='border-color:darkgrey;'/><div style='width:40%;float:left;'><label for='wklasa'>Klasa: </label><br/></div><div style='width:60%;float:left;text-align:right;'><select name='wklasa' required style='width:95%;'><option value='1'>1A</option><option value='2'>1B</option><option value='3'>2A</option><option value='4'>2B</option><option value='5'>3A</option><option value='6'>3B</option></select><br/></div><div style='width:100%;clear:both;text-align:center;'><br/><input type='submit' value='Wyświetl' style='width:50%;'></div></form></div>"
            paneldzialania.innerHTML=menuwyswietlania;
        }
    </script>
</body>
</html>