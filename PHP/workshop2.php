<!-- Step 1 : Script PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="index.php" method="POST" style="margin-left:500px;">
 <input type="text" name="name" placeholder="nom"> <br>
 <input type="text" name="age" placeholder="age"> <br>
 <input type="text" name="sexe" placeholder="sexe"> <br>
 <button type="submit">submit</button><br>
 </form>
 <?php
//    var_dump($_POST);
   if(!empty($_POST)){
  $name =  $_POST["name"];
  $age =  $_POST["age"];
  $sexe =  $_POST["sexe"];

    echo " « Bienvenu $sexe $name, vous avez $age ans. »";
  
}
 ?>
</body>
</html>
<!-- Step 2 : Script PHP & HTML -->
<form action="index.php" method="POST">
<input type="text" name="a" placeholder="entrer a">
<input type="text" name="b" placeholder="entrer b">
<button type="valider">valider</button>
</form>
<?php
if(!empty($_POST)) {
$a = $_POST["a"];
$b = $_POST["b"];
echo "<table border=1>";
for ($i=1 ; $i<=$a ; $i++) {
    echo "<tr>";
    for ($j=1 ; $j<=$b ; $j++) {
        echo "<td>".$i*$j."</td>" ;
    }
    echo "</tr>";
}
}
echo "</table>";