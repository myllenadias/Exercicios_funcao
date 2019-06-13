<?php

/*Escreva um programa para ler as notas das duas avaliações de um aluno no semestre.
Faça uma função que receba as duas notas por parâmetro e calcule e escreva a média
semestral e a mensagem “ PARABÉ NS! Você foi aprovado! ” somente se o aluno foi
aprovado (considere 6.0 a média mínima para aprovação).*/

function media($n1, $n2){
    $media = ($n1 + $n2)/2;

     if ($media >= 6){
    print "Média = " . $media . "\n";
    print "PARABÉNS! Você foi aprovado!";
    }

    else {
    print "Média = " . $media . "\n";
    print "Você foi reprovado" . "\n";
    }
}


print "Digite a primeira nota: ";
$n1= (float) fgets(STDIN);
print "Digite a segunda nota: ";
$n2= (float) fgets(STDIN);
media($n1, $n2);



