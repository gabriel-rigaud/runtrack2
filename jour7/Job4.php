<?php
function calcul($a, $b)
{
    $add = $a+$b;
    $sous = $a-$b;
    $multi = $a*$b;
    $div = $a/$b;
    return array($add, $sous, $multi, $div);
}

list($add, $sous, $multi, $div) = calcul(30, 10);

echo $add . '<br />';
echo $sous . '<br />';
echo $multi . '<br />';
echo $div . '<br /> ';
?>