<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="/css/style1.css">

    <?php
    if ($_POST){
        if ($_POST["style"] == "style1"){
            echo '<link rel="stylesheet" type="text/css" href="style1.css">';}
        else if ($_POST["style"] == "style2"){
            echo '<link rel="stylesheet" type="text/css" href="style2.css">';}
        else{
            echo '<link rel="stylesheet" type="text/css" href="style3.css">';
        }
    }
    ?>


</head>
<body>
<h1>Binvenue !</h1>
<form action="" method="post">
<label for="sujet">Choisissez votre thèmes</label>
    <select name="style">
        <option value="style1">Thèmes 1</option>
        <option value="style2" <?php echo (isset($_POST)) ? (($_POST["style"] == "style2") ? "selected" : NULL) : NULL;?>>Thèmes 2</option>
        <option value="style3" <?php echo (isset($_POST)) ? (($_POST["style"] == "style3") ? "selected" : NULL) : NULL;?>>Thèmes 3</option>
    </select>
    <button type="submit" name="valider">Envoyer le message</button>
</form>

</body>
</html>
