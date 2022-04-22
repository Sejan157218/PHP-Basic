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

<?php
$integer=4;
$str="sejan";
$boolean=true;
$float=3.3;
echo var_dump(($integer));
echo "</br>";
echo var_dump(($str));
echo "</br>";
echo var_dump(($boolean));
echo "</br>";
echo var_dump(($boolean));
echo "</br>";


?>

<!-- Condition -->

<?php
$integer=4;
$str="sejan";
$boolean=true;
$float=3.3;

if ($integer>5){
    echo "it's getter than 5";
    echo "</br>";
}
elseif($str=="sejan"){
    echo "It's me";
    echo "</br>";
}
else{
    echo "here nothing true";
    echo "</br>";
}

switch($str){
    case "2":
        echo "it's 2";
        echo "</br>";
        break;
    case "sejan":
        echo "it's me";
        echo "</br>";
        break;
    default:
    echo "here nothing true";
    echo "</br>";
}
?>


<!-- loops -->
<?php
for($a=1;$a<10;$a++){
    echo $a;
    echo "</br>";
}

$x=10;
while($x>0){
    echo $x;
    echo "</br>"; 
    $x--;
}
?>

<!-- Operator -->

<?php
$s=10;
echo $s++;
echo "</br>"; 
// echo $s;
// echo "</br>";  
?>
<!-- String -->

<?php
$s="Sejan";
echo strlen($s);
echo "</br>"; 
 
echo str_word_count($s);
echo "</br>"; 
 
echo strrev($s);
echo "</br>"; 
 
?>


<!-- Function -->
<?php
function name($x){
    echo "Hey  $x";
    echo "</br>"; 
}
 $a="sejan";
name("sejan")
?>
<?php
function nameS(&$x){
        $x="sajal";
}
$a="sejan";
nameS($a);
echo $a."</br>";
?>

<!-- Array -->
<!-- index array -->
<?php
$marks=array("tony","s","e");
echo $marks[2];
echo "</br>"; 
?>
<!-- associative array -->
<!-- 1 way -->
<?php
$marks=array("sejan"=>"91","sajal"=>"92","Babu"=>"95");
echo $marks["sejan"];
echo "</br>"; 
?>
<!-- 2 way -->
<?php
$marks["a"]="5";
$marks["b"]="6";
$marks["c"]="7";
$marks["d"]="8";

echo $marks["d"];
echo "</br>"; 
?>

<!-- multidimension array -->
<?php
$marks=array(
    array("5","6","7"),
    array("8","9","10"),
    array("11","12","13"),
    array("14","15","16"),
);


print_r ($marks[1]);
?>