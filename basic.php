<!-- php run code tag -->
<?php
echo "this is first PHP";
?>

<!-- Variable -->
<?php
$x=1;
$y=1.1;
$Z="This is String";
echo $x."</br>",$y."</br>",$Z."</br>";
?>

<!-- local variable -->
<?php
function marks(){
    $marks=99;
    echo "You got marks (local variable): ".$marks."</br>";
}
marks();
?>

<!-- global variable -->
<?php
 $marks="you got 100";
function globalVariable(){
   global $marks;
    echo "You got marks (global variable) : ".$marks."</br>";
}
globalVariable();
echo "You got marks  (global variable): ".$marks."</br>";
?>

<!-- statice variable -->
<?php

function staticeVariable(){
   static $marks=95;
    $marks++;
    echo "You got marks (statice variable): ".$marks."</br>";
}
staticeVariable();
staticeVariable();
staticeVariable();
staticeVariable();
staticeVariable();
staticeVariable();

?>