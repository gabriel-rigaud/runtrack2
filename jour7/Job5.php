<?php

function occurences($str, $char){
    $a = 0;
    $b = 0;
while (isset($str[$a])){
if ($char == $str[$a]){
    $b++;
}
$a++;
}
return $b;
}

echo occurences('Bonjour','o');

?>