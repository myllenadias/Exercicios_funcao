<?php

//*Escreva uma função que receba dois números inteiros x e y. 
//Essa função deve verificar se x é divisível por y. No caso positivo, a função deve retornar 1, caso contrário zero.
// Escreva também um programa para testar tal função. 


function divisivel ($x, $y)
    {
        if ($x%$y==0)
            {print "1 -\n$x é divisível por $y";}

        if ($x%$y!=0)
            {print "0 -\n$x não é divisível por $y";}
    }
print "Digite o número 1(x): ";
$x= (int) fgets(STDIN);

print "Digite o número 2(y): ";
$y= (int) fgets(STDIN);

divisivel ($x, $y);