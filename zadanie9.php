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

// 9. Ile liczb jest podzielnych przez 3 bez reszty
$podzielne3 = 0;
for ($i = 0; $i < $n; $i++) {
    if ($tab[$i] % 3 == 0) $podzielne3++;
}
echo "Podzielnych przez 3: $podzielne3\n";
