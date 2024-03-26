<?php
// Duas variáveis inteiras
$var1 = 10;
$var2 = 5;

// Vetor com 4 posições
$resultados = array();

// Soma das duas variáveis na primeira posição
$resultados[] = $var1 + $var2;

// Subtração das duas variáveis na segunda posição
$resultados[] = $var1 - $var2;

// Multiplicação das duas variáveis na terceira posição
$resultados[] = $var1 * $var2;

// Divisão das duas variáveis na quarta posição
$resultados[] = $var1 / $var2;

// Exibindo o vetor com os resultados
echo "Resultados: ";
print_r($resultados);
?>