<?php 

$user = 'root';
$password = 'root';

try
{
    $bdd = new PDO ('mysql:host=localhost;dbname=Lezizou', $user, $password); 
}   catch (PDOException $e)
{
    print "Erreur :" . $e->getMessage() . "<br>";
    die;
}


?>
