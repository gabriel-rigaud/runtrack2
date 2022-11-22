<form method="get">
    <label>Entrez votre Prénom<label>
    <input type="text" name="name">
    <label>Entrez votre Nom<label>
    <input type="text" name="first">
    <label>Entrez votre Email<label>
    <input type="email" name="email"><br>
    <br><input type="submit" value="Envoyé"><br>
</form>


<form method="get">
    <table>
        <br>
        <tr>
            <td>Argument</td>
            <td>Valeur</td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><?php echo $_GET["name"]?></td>
        </tr>
        <tr>
            <td>Nom</td>
            <td><?php echo $_GET["first"]?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $_GET["email"]?></td>
        </tr>
    </table>
</form>

<?php
foreach ($_GET as $type => $valeur){
    return $valeur;
}
?>