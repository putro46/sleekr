
<?php
	include("Calculator.php");
	
   $ans = new Calculator();
   $num1 = $_POST['number1'];
   $num2 = $_POST['number2'];
   $opr = $_POST['operator'];
   if($opr == '+'){
    echo $num1." ".$opr." ".$num2." = "; 
    $ans->Add($num1,$num2);
   }
   else if($opr == '-'){
    echo $num1." ".$opr." ".$num2." = "; 
    $ans->Sub($num1,$num2);
   }
   else if($opr == '*'){
    echo $num1." ".$opr." ".$num2." = ";  
    $ans->Mul($num1,$num2);
   }
   else if($opr == '/'){
    echo $num1." ".$opr." ".$num2." = ";  
    $ans->Div($num1,$num2);
   }
  ?>
