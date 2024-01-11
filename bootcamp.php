<?php
function luasLingkaran($r) {
    return number_format(3.14 * $r * $r, 2);
}

function kelilingLingkaran($r) {
    return number_format(2 * 3.14 * $r, 2);
}

function luasPersegi($panjang, $lebar) {
    return number_format($panjang * $lebar, 2);
}

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo luasPersegi($i / 3, $i / 5) . PHP_EOL;
    } elseif ($i % 3 == 0) {
        echo luasLingkaran($i / 3) . PHP_EOL;
    } elseif ($i % 5 == 0) {
        echo kelilingLingkaran($i / 5) . PHP_EOL;
    } else {
        echo number_format($i, 2) . PHP_EOL;
    }
}