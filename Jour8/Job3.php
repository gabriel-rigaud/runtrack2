<?php session_start() ?>
<html>
<body>
<h4>Bienvenue sur mon afficheur de nombre de visiteur</h4>
<form method="post">
    <input name="prenom" type="text" placeholder="Entrée votre prénom">
    <input name="envoyer" type="submit">
    <input name="reset" type="submit" value="Réinitialiser">
</form>
</body>
</html>
<!--Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de session.-->
<!--Afficher l’ensemble des prénoms.-->
<!--Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.-->
<?php
