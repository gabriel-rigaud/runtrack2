<form method="post">
    <label>Entrez votre Prénom<label>
    <input type="text" name="name">
    <label>Entrez votre Nom<label>
    <input type="text" name="first">
    <label>Entrez votre Email<label>
    <input type="email" name="email">
    <input type="submit" value="Envoyé">
</form>

<?php

$nombre = 0;
foreach ($_POST as $type => $valeur){
    $nombre++;


}
echo $nombre;
?>