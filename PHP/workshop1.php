<!-- Step1 -->

<?php
// une chaîne de caractères,
echo "hello world";
// une variable contenant un entier,
$age = 21;
echo "$age";
// une chaîne de caractères faisant apparaître une variable (dont on veut connaître le contenu),
$nom = "YASSINE";
echo 'Bonjour ';
echo $nom;
echo ' !';
// un texte différent selon qu'une condition est vraie ou fausse.
$autorisation_entrer = true;

if ($autorisation_entrer == true)
{
    echo "Bienvenue";
}
elseif ($autorisation_entrer == false)
{
    echo "T'as pas le droit d'entrer !";
}
?>
<!-- Step2 -->
<!-- Affichage simple en PHP et HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");
?>
</body>
</html>