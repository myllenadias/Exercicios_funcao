<?php

//*Escreva uma função que recebe 2 números inteiros n1 e n2 como entrada e retorna a soma de todos os números inteiros contidos no intervalo [n1,n2]. 
//Use esta função em um programa que lê n1 e n2 do usuário e imprime a soma. *//

function soma($n1, $n2){
    $soma = 0;
    for ($i=$n1; $i <= $n2; $i++){
        $soma = $soma + $i;
    }
    return $soma;
}

print "Digite um número: ";
$n1 = (int) fgets (STDIN);

print "Digite outro número: ";
$n2 = (int) fgets (STDIN);

$soma = soma($n1,$n2);
print "A soma dos números no intervalo de $n1 até o $n2 foi de: $soma";
