<?php
function addFive(&$num){
    $num = $num+5;
    echo "hello";
}
$x=10;
addFive($x);
echo $x;

?>