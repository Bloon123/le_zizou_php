<?php
require('components/header.php');
<form action="/?page=login_attempt" method="post">

    <h2>Adresse mail</h2>
    <input type="text" name="mail" required>
    <h2>Mot de passe</h2>
    <input type="password" name="password" required><br>
    <input type="submit">

</form>
?>
