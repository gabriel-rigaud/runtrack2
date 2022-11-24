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
if (!isset($_COOKIE) && isset($_POST['button'])){
    setCookie('nbvisites',);
    header('Location: .');
}
elseif (isset($_COOKIE['nbvisites']) && !isset($_POST['button'])){
    $a = $_COOKIE['nbvisites'];
    $a++;
    setcookie('nbvisites', (string)$a);
}
echo $_COOKIE['nbvisites'];
?>