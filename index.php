<link rel="stylesheet" href="/css/php.css" />

<?php
    $boolean = true;
    $valeur = false;
    $string = "Coucou";
    $float = 20405.33487;
    $chiffreone = 90;
    $chiffretwo = 40;
    $prenom = 'David';
?>
<table class="tableau">
        <tr class="colone">
            <thead>
            <td>Valeur De False</td>
            <td>Type</td>
            <td>Nom</td>
            <td>Valeur</td>
            <td>90 Divisé Par 40</td>
            <td>Prénom</td>
        </tr>
        <tr class="colone">
            <td><?php echo ($valeur)?></td>
            <td><?php echo ($boolean)?></td>
            <td><?php echo ($string)?></td>
            <td><?php echo ($float)?></td>
            <td><?php echo ($chiffreone*$chiffretwo)?></td>
            <td><?php echo ($prenom)?></td>
            </thead>
        </tr>
    </table>
