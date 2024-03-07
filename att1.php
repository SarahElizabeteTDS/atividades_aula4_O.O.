<?php

$numeros = array();

for ($i=0; $i < 10; $i++) 
{ 
    $num = readline("Escreva um número: \n");
}

$media = 0;

foreach ($numeros as $num) 
{ 
    $media += $num;
}

print "A média aritmética é de: " . $media/count($numeros);
