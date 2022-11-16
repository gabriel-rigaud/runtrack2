<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$i = 0;
$e = 0;
while (isset($str[$i]) == 1) {
    $i = $i +1;
    $e = $e + 1;
}
for ($i =0; $i < $e; $i++) {
    if ($i % 2 == 0) {
        echo $str[$i];
    }
}

?>