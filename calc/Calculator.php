<?php

class Calculator{
   
  var $add; 
  var $sub;
  var $mul;
  var $div;
    
  function Add($n1,$n2){
   echo $this->add = $n1 + $n2;
  }
    
  function Sub($n1,$n2){
   echo $this->sub = $n1 - $n2;
  }
    
  function Mul($n1,$n2){
   echo $this->mul = $n1 * $n2;
  }
    
  function Div($n1,$n2){
   echo $this->div = $n1 / $n2;
  }
 }
?>