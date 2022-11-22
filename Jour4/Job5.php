<form method="post">
    <label>Entrez votre Prénom<label>
    <input type="text" name="username">
    <label>Entrez votre Mot de Passe<label>
    <input type="password" name="password">
    <input type="submit" value="envoyer">
</form>


<?php

if ($_POST["username"] == "John" && $_POST["password"] == "Rambo"){
    $mdp = "C'est pas ma guerre";
    echo $mdp;
}
else {
    $mdptous = "Votre pire cauchemar";
    echo $mdptous;
}
?>