<?php
header("Content-Type: text/plain; charset=utf-8");

// Tablica: 21 losowych liczb z zakresu 1-10
$tab = [];
for ($i = 0; $i < 21; $i++) {
    $tab[] = rand(1, 10);
}

// Liczba elementów (bez count())
$n = 0;
foreach ($tab as $x) { $n++; }

echo "Tablica: " . implode(", ", $tab) . "\n\n";

// 1. Najmniejszy i największy element
$min = $tab[0];
$max = $tab[0];
for ($i = 1; $i < $n; $i++) {
    if ($tab[$i] < $min) $min = $tab[$i];
    if ($tab[$i] > $max) $max = $tab[$i];
}
echo "Najmniejszy: $min, największy: $max\n";
