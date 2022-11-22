<form method="get">
    <label>Entrez votre Prénom<label>
    <input type="text" name="name">
    <label><br>Entrez votre Nom<label>
    <input type="text" name="first">
    <label><br>Entrez votre Email<label>
    <input type = "email" name = "email"><br>
    <br><input type="submit" value="Envoyé"><br>
</form>

<?php

$nombre = 0;
foreach ($_GET as $type => $valeur){
    $nombre++;
}
echo $nombre;
?>