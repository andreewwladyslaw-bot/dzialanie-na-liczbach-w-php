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

// 2. Średnia wartość elementów
$suma = 0;
for ($i = 0; $i < $n; $i++) {
    $suma += $tab[$i];
}
$srednia = $suma / $n;
echo "Średnia: " . round($srednia, 2) . "\n";
