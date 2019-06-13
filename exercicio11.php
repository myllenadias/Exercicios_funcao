<?php

//*  Crie uma função que realize a conversão de Polegadas (pol) para Centímetros (cm), onde pol é passado como parâmetro e cm é retornado. 
//Sabe-se que 1 polegada tem 2.54 centímetros. Crie também um programa para testar tal função. *//

function polegaresparacentimetros ($pol)
        {$cm= $pol*2.54;
    
        return $cm;}

print "Digite as polegadas para a conversão: ";
$pol= (float) fgets(STDIN);

$cm= polegaresparacentimetros ($pol);

if ($pol==0)
    {print "0 polegadas são 0 centímetros";}

if ($pol==1 )
    {print "$pol polegada equivale a $cm centímetros. ";
    }
    
if ($pol>1)
    {print "$pol polegadas equivalem a $cm centímetros. ";
    }