<?php

//*Escreva um programa para ler o número de lados de um polígono regular e a medida do lado (em cm). 
//Faça uma função que receba como parâmetro o número de lados e a medida do lado deste polígono e calcule e
 //imprima o seguinte:  • Se o número de lados for igual a 3, escrever TRIÂNGULO e o valor do seu perímetro. 
 //• Se o número de lados for igual a 4, escrever QUADRADO e o valor da sua área.
 // • Se o número de lados for igual a 5, escrever PENTÁGONO.  
//Observação: Considere que o usuário só informará os valores 3, 4 ou 5*//

function poligono($qntd_lados, $comprimento_lado)
{
	if ($qntd_lados == 3) {
		$poligono = "Triângulo";
		$perimetro = $comprimento_lado * 3;
        return "\n O polígono é um  $poligono \n Perimetro = $perimetro cm \n";
        
	} else if ($qntd_lados == 4) {
		$poligono = "Quadradro";
        $area = $comprimento_lado ** 2;
        return "\n O polígono é um $poligono \n Área = $area cm \n";
        
	} else if ($qntd_lados == 5) {
		$poligono = "Pentágono";
		return "\n O polígono é um $poligono \n";
		
	} else {
		print "NUMERO INVÁLIDO";
		exit;
	}
}
print "Quantos lados possui o polígono? ";
$qntd_lados = (int)fgets(STDIN);
if ($qntd_lados == 5) {
	$func_poligono = poligono($qntd_lados, 0);
	print $func_poligono;
} else {
	print "Quantos cm medem um lado? ";
	$comprimento_lado = (int)fgets(STDIN);
	$func_poligono = poligono($qntd_lados, $comprimento_lado);
	print $func_poligono;
}