<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rozgrywki futbolowe</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
    <div class="baner">
<h2>Światowe rozgrywki piłkarskie</h2>
<img src="obraz1.jpg" alt="boisko">
    </div>

    <div id="mecze">
<?php
        $pol = mysqli_connect("localhost", "root", "","egzamin");

                $zap = "select zespol1, zespol2, wynik, data_rozgrywki from rozgrywka where zespol1='EVG'";

                $wynik = mysqli_query($pol, $zap);

                foreach($wynik as $wiersz){
                echo "<div class='informacja'>";
                echo "<h3>" .$wiersz['zespol1'].$wiersz['zespol2']."</h3>";
                echo "<h4>".$wiersz['wynik']."</h4>";
                echo "<p> w dniu ".$wiersz['data_rozgrywki']."</p>";
                echo "</div>";

                }
?>

</div>

<div id="glowny">
<h2>Reprezentacja Polski</h2>
</div>

<div id="lewy">
<p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy,
4-napastnicy):</p>
<from action="futbol.php" method="POST">
    <input type="number" name="pozycja" id="pozycja">
    <input type="submit" value="Sprawdź">
</form>

<ul>
        <?php
        if(isset($_POST['pozycja'])){
            $pozycja= $_POST['pozycja'];
            $zap2="select imie, nazwisko from zawodnik where pozycja_id = ".$pozycja."";
            $wynik2=mysqli_query($db, $zap2);
            foreach($wynik2 as $ $wiersz2) {
                echo "<li>".$wiersz2['imie']."".$wiersz2['nazwisko']."</li>";
            }

        }
        mysqli_close($pol);
        ?>



</ul>
</div>

<div id="prawy">
    <img src="zad1.png" alt="piłkarz">
    <p>Autor:000000000000000</p>
</div>


</body>
</html>