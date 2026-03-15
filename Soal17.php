<?php
function Halo(int $x = 0, $y = 0) {
    return $x + $y;
}
//Melakukan echo kepada hasil pemanggilan fungsi
echo Halo(x: 5, y: 4);
//Melakukan assign nilai return dari fungsi kepada variable
$z = Halo(x: 2, y: 2);
echo ("\n$z");
?>