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

// 5. Mediana (wymaga posortowanej tablicy)

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

if ($n % 2 == 1) {
    $mediana = $sort[intdiv($n, 2)];
} else {
    $mediana = ($sort[$n / 2 - 1] + $sort[$n / 2]) / 2;
}
echo "Posortowana: " . implode(", ", $sort) . "\n";
echo "Mediana: $mediana\n";
