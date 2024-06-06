<?php

$numero = 5;
$contador=1;$res;                                                                                        

//repeticao com teste no final
    do{
    $res= $numero * $contador;
    echo"{$contador} x {$numero} = {$res}\n";
    $contador ++;

    }while($contador <= 10);



?>