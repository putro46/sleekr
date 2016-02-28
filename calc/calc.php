<?php

$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$oper = $_POST['oper'];

if($oper == "+") 
{
	$answer = $number1+$number2;
}

if($oper == "-") 
{
	$answer = $number1-$number2;
}

if($oper == "*") 
{
	$answer = $number1*$number2;
}

if($oper == "/") 
{
	$answer = $number1/$number2;
}

echo "<h1>".$answer."</h1>";
	
?>