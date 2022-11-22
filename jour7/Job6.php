<?php
function leetspeak($str){
    $a = 0;
    while (isset($str[$a])) {
        if ($str[$a] == 'A' || $str[$a] == 'a') {
            $str[$a] = '4';
        }
        else if ($str[$a] == 'B' || $str[$a] == 'b') {
                $str[$a] = '8';
            }
            else if ($str[$a] == 'E' || $str[$a] == 'e') {
                    $str[$a] = '3';
                }
                else if ($str[$a] == 'G' || $str[$a] == 'g') {
                        $str[$a] = '6';
                    }
                    else if ($str[$a] == 'L' || $str[$a] == 'l') {
                            $str[$a] = '1';
                        }
                        else if ($str[$a] == 'S' || $str[$a] == 's') {
                                $str[$a] = '5';
                            }
                            else if ($str[$a] == 'T' || $str[$a] == 't') {
                                    $str[$a] = '7';
                                }
        $a++;
    }
    echo $str;
}

echo leetspeak('aAbBeEgGllsStT');


?>