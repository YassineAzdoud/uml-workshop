<!-- Script PHP : -->
<?php
function Nb_Premier($nb){
    $b = 1;
 
    if($nb == 1){echo "$nb n'est pas un nombre premier.
";return false;}
    if($nb == 2){echo "$nb est un nombre premier.";return false;}
 
    do{
        $b++;
    $c = $nb%$b;
    $d = $nb/$b;
    $e = floor($d);
    if($c == 0){echo "$nb n'est pas un nombre premier. Une décomposition $e * $b + $c
 
";return false;}
    }
    while($b<Sqrt($nb));
    echo "$nb est un nombre premier.";
}
 
function Carré($nb){
    $result = $nb*$nb;
    echo "Le carré de $nb est : $result";
}
 
function LogarithmeN($nb){
    $result = Log($nb);
    echo "Le logarithme népérien de $nb est : $result";
}
 
function Racine($nb,$base){
    $base2 = 1/$base;
    $result = pow($nb,$base2);
    echo "La racine de base $base de $nb est : $result";
}
 

 
carré(5);
LogarithmeN(2);
Racine(27,3);
NB_Premier(169);
?>
<!-- Script PHP, HTML & JS : -->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Chapitre 7 Exercice 1 </title>
</head>
<body>
<?php
function alerte($ch)
{
echo "<script type=\"text/javascript\"> alert('$ch'); </script>";
return TRUE;
}
//Utilisation
if(alerte("Bonjour à tous")) echo "La fonction alerte() fonctionne
bien";
alerte('RAAAAAAAAAAAAAAAAAA');
?>
</body>
</html>

<?php
//Définition de la fonction
function initmaj(&$tab)
{
foreach($tab as $ind=>$val)
{
$tab[$ind]=ucfirst(strtolower($val));
}
return $tab;
}
//Utilisation
$tabch= array("AzertToTO","Sous peAu","sARtHES jp");
print_r(initmaj($tabch));
?>