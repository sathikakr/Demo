<?php
function addFive(&$num){
    $num = $num+5;
}
$x=10;
addFive($x);
echo $x;

?>