<?php
$matriz = [[5, 8, 7,2], [1,0,6,9], [3,4,10,12], [11,18,20,19]];
$sumaDiagonal = 0;
for($i = 0; $i<4; $i++ )
{
    for ($j = 0; $j < 4 ; $j++) { 
       if ($i == $j) {
        $sumaDiagonal += $matriz[$i][$j];
       }

       
    }

   }

   echo 'la suma de la diagonal principal es ' . $sumaDiagonal. '<br>';



