<?php
/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:host=127.0.0.1';
$user = 'root';
$password = '';


try {
    $dbh = new PDO($dsn, $user, $password);
    echo "Connexion autorisée";
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>
<?php
try {
    $dbh->exec('DROP DATABASE IF EXISTS `Lezizou`;');
    $dbh->exec("CREATE DATABASE `Lezizou`;");
    echo "<h2>Créer la base de données ✅</h2>";
} catch (PDOException $e) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">" . $e->getMessage() . "</div>";
    die();
}
?>

<?php
try {
    $dbh->exec('CREATE TABLE `Lezizou`.`contact` (
      `id` INT NOT NULL AUTO_INCREMENT,
      `name` VARCHAR(45) NOT NULL,
      `firstname` VARCHAR(45) NOT NULL,
      `birthdate` DATE NOT NULL,
      PRIMARY KEY (`id`));
    ');
    echo "<h3>Créer la structure de la table ✅</h3>";
} catch (PDOException $e) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">" . $e->getMessage() . "</div>";
    die();
}
?>

<?php
try {
    $stmt = $dbh->prepare('INSERT INTO `contact` 
        (name, firstname, birthdate, ) VALUES (
        "SOYER", "Alex", "1993-01-19"
    );');
    $stmt->execute();
    echo "<h3>Insertion de valeurs dans la base ✅</h3>";
} catch (PDOException $e) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">" . $e->getMessage() . "</div>";
    die();
}
?>