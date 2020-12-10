<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour</title>
</head>
<body>

<h1><?php echo "Bonjour le monde"; ?></h1> 

<?php
echo"<h1>Bonjour le monde</h1>"; 

$bonjour = "Bonjour le monde"; 

echo "<b>$bonjour</b>\n"; 

echo "<br>\n";

echo "Affichage d'un \" "; 

echo "<br>\n";

$a = "Winter"; 
echo $a . " is coming !"; ;

?>
<br>
<?php

$a = $b = 2; 
function somme() { 
  global $a, $b; 
  $b = $a + $b; 
} 
somme(); 
echo $b."<br>"; 

function Test() { 
    $a=0; 
    echo $a."<br>"; 
    $a++; 
 } 
 // Appel de la fonction (2 fois)
 Test(); 
 Test(); 

 function Test1 () 
{ 
   static $a=0; 
   echo "$a<br />"; 
   $a++;
} 

// Appel de la fonction (3 fois)
Test1(); 
Test1(); 
Test1(); 


$a = 6.32172; 
$b = intval($a); 
$c = doubleval($a); 
echo $a - $b - $c."<br>";   //renvoie -6

echo "Fichier : ".__FILE__.", ligne : ".__LINE__."<br>";

$myVar = "bonjour";
var_dump($myVar);

echo "<br>";

$myVar = "KO";

if ($myVar == "OK") 
{   
   echo"C'est bon<br>";
} 
else {
    echo"Ouh la la pas bien !<br>"; // Message affiché dans la page web
    $message = "Ouh la la pas bien ".__FILE__." ".__LINE__;        
    error_log($message);
}

echo "<br>";

echo $_SERVER["SERVER_NAME"]; //: affiche le nom de l'hôte (= serveur), localhost pour Wamp
var_dump($_SERVER);

?>

<?php

echo"<br>";


  $euro = 6.55957;
  printf("%.2f FF",$euro);

  echo"<br>";

  $money1 = 68.75;
  $money2 = 54.35;
  $money = $money1 + $money2;

  echo $money."<br>"; // affiche 123.1;

  echo "affichage sans printf : ".$money."<br>";

  $monformat = sprintf("%01.2f", $money);

  echo $monformat; // affiche 123.10

  echo"<br>";
  
  echo "affichage avec printf : ".$monformat."<br>";

  $year = "2002";
  $month = "4";
  $day = "5";

  $date = sprintf("%04d-%02d-%02d", $year, $month, $day);

  echo $date."<br>"; // affichera "2002-04-05"
  echo "affichage avec sprintf : ".$date."<br>";
?>



    
</body>
</html>