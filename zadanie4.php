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

// 4. Sortowanie rosnąco

// Sortowanie bąbelkowe (na kopii tablicy)
$sort = $tab;
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($sort[$j] > $sort[$j + 1]) {
            $temp = $sort[$j];
            $sort[$j] = $sort[$j + 1];
            $sort[$j + 1] = $temp;
        }
    }
}

echo "Posortowana: " . implode(", ", $sort) . "\n";
