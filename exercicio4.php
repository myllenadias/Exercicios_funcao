<?php

/*Faça um programa que leia a altura e o sexo (codificado da seguinte forma:
1-feminino 2-masculino) de uma pessoa. Depois faça uma função chamada pesoideal
que receba a altura e o sexo via parâmetro e que calcule e retorne seu peso ideal,
utilizando as seguintes fórmulas:
• para homens: (72.7 * h) – 58
• para mulheres: (62.1 * h) – 44.7
Observação: Altura = h (na fórmula acima).*/

function pesoideal ($sexo, $altura){
    if ($sexo == 1){
        $pesoideal = (62.1*$altura)-44.7;
        print " Seu peso ideal é de: $pesoideal ". "Kg";
    }
    else if ($sexo == 2){
        $pesoideal = (72.7*$altura)-58;
        print " Seu peso ideal é de: $pesoideal ". "Kg";
    }
 }

print "Digite o seu sexo (1-feminino 2-masculino): ";
$sexo= (int) fgets(STDIN);
print "Digite a sua altura em centimetros: ";
$altura= (int) fgets(STDIN);
$altura = $altura/100;


print pesoideal($sexo,$altura);

