<?php

/*Faça uma função que calcule a hipotenusa. Os catetos são os dados de entrada e a
hipotenusa é o dado de saída.
hipotenusa = catetoA 2 + catetoB 2*/

function hipotenusa ($catA, $catB){
    $hipotenusa = sqrt (($catA*$catA) + ($catB*$catB));
    return $hipotenusa;
}

print "Digite o valor do cateto A: ";
$catA= (float) fgets(STDIN);
print "Digite o valor do cateto B: ";
$catB= (float) fgets(STDIN);


$hipotenusa = hipotenusa($catA, $catB);
print "Hipotenusa = " . $hipotenusa;