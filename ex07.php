<?php
// Criando um vetor com 5 times de futebol
$times = array("Flamengo", "São Paulo", "Palmeiras", "Corinthians", "Internacional");

// Mostrando o nome do último time armazenado no vetor
echo "O último time armazenado é: " . end($times) . "\n";

// Alterando o nome do último time
$times[count($times)-1] = "Grêmio";

// Mostrando o novo nome do último time
echo "O novo último time é: " . end($times) . "\n";
?>
