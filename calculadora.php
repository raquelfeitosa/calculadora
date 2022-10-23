<?php
$num=$_POST["num1"];
$num=$_POST["num2"];
$num=$_POST["opcao"];

switch($opcao){
    case "somar":
     $resultado=$num1+$num2;
     echo "A soma é:" .$resultado;
     break;

     case "subtrair":
        $resultado=$num1-$num2;
        echo "A subtração é" .$resultado;
        break;

     case "dividir":
        $resultado=$num1/$num2;   
        echo "A divisão é" .$resultado
        break;

     case "multiplicar":
        $resultado=$num1*$num2;
        echo "A multiplicação é" .$resultado
        break;
        

}