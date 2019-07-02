<?php

$a = array();

$a[1] = '1'; 
$a[2] = '1';


for ($i = 3; $i <= 64; $i++)
    {
        $a[$i] = bcadd( $a[$i-1], $a[$i-2] );
    }

for ($i = 1; $i <= 64; $i++)
    {
        echo( $a[$i] . ", <br/> \n " );
    }
?>