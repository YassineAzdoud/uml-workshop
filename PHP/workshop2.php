<!-- //Script PHP -->
<?php
$couleur = array ('blanc', 'vert', 'rouge', 'bleu', 'noir');
echo "Le souvenir de cette scène pour moi est comme une trame de film à jamais figée à ce moment-là: <br/>
 le tapis <strong>$couleur[2]</strong>, la pelouse <strong>$couleur[1]</strong>, la maison <strong>$couleur[3]</strong>, le ciel plombé. Le nouveau président et son première dame. - Richard M. Nixon" ; 
?>  




<?php
$ceu = array ("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Bruxelles", "Denmark" => "Copenhague", "Finland" => "Helsinki "," France "=>" Paris ",
" Slovaquie "=>" Bratislava "," Slovénie "=>" Ljubljana "," Allemagne "=>" Berlin "," Grèce "=>" Athènes "," Irlande " => "Dublin", "Netherlands" => "Amsterdam",

"Portugal" => "Lisbonne", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "Londres "," Chypre "=>" Nicosie "," Lituanie "=>"Vilnius ",
" République tchèque "=>" Prague "," Estonie "=>" Tallin "," Hongrie "=>" Budapest "," Lettonie "=>" Riga "," Malte "=>" La Valette "," Autriche "=>" Vienne "," Pologne "=>" Varsovie "); 
foreach($ceu as $x => $x_value) {
    echo "La capitale des" . $x . "est" . $x_value;
    echo "<br>";
  }


?>

<!-- Script PHP & HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<table>";

$month = array("1" => "janvier", "2" => "Février", "3" => "Mars", "4" => "Avril", "5" => "Mai", "6" => "Juin", "7" => "Juillet", "8" => "Aout", "9" => "Septembre", "10" => "octobre", "11" => "Novembre", "12" => "Décembre");
echo "<table border=1>";
foreach ($month as $x => $x_value){
    echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";

}
echo "</table>";
?>



</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//Fonction 
function affichtable($month){
    echo "<table border=1>";
    foreach ($month as $x => $x_value){
        echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";
    }
    echo "</table>";
}

//** */
//Déclaration tableau
$month = array("cle" => "value", "said" => "13", "badr" => "16", "najat" => "15",);
//Afficher Tableau 
affichtable($month);

//Insertion
$month["karim"] ="10";
unset($month["said"]);

$month=array_merge($month, ["zrze" => "sdf"]);


affichtable($month);


//var_dump($month);

//Calcul note maximal t la note minimale
echo "la note maximale est: ".max($month)."la note minimale est:".min($month);
asort($month);
affichtable($month);
echo"la moyenne de la classe:".round(array_sum($month)/count($month),3);
echo array_sum($month);


?>
</body>
</html>