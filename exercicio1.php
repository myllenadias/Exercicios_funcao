<?php

/*Faça uma função para converter uma temperatura em graus Fahrenheit para Celsius. A
temperatura em Fahrenheit é o dado de entrada e a temperatura em Celsius é o dado
de saída. Utilize a fórmula C = (F - 32) * 5/9 , onde F é a temperatura em Fahrenheit e
C é a temperatura em Celsius.*/

function converter ($tf)
{
    $tc = ($tf -32) * 5/9;
    return $tc;
}

print "Digite uma temperatura em Fahrenheit: ";
    $tf = (float) fgets (STDIN);
    $tc = converter($tf);
    print " A temperatura $tf em  Fahrenheit convertida para Celsius fica: $tc °C ";
