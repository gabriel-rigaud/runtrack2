<?php session_start() ?>
<html>
<body>
<h4>Bienvenue sur mon afficheur de nombre de visiteur</h4>
<form method="post">
    <input name="button" type="submit" value="reset">
</form>
</body>
</html>
<?php
if(isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites']++;

}

if (isset($_POST['button'])){
    $_SESSION['nbvisites'] = 0;

}
echo $_SESSION['nbvisites'];
?>