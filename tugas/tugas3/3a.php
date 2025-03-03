<?php
function hitungLuasLingkaran($jarijari)
{
    return pi() * pow($jarijari, 2);
}

function hitungKelilingLingkaran($jarijari)
{
    return 2 * pi() * $jarijari;
}

$jarijari = 10;
echo "Menghitung Luas Lingkaran<br><br>
Jari-jari = $jarijari cm.<br>
Luas Lingkaran = " . hitungLuasLingkaran($jarijari) . "\n cm².<hr>";

$jarijari = 20;
echo "Menghitung Keliling Lingkaran<br><br>
Jari-jari = $jarijari cm.<br>
Keliling Lingkaran = " . hitungKelilingLingkaran($jarijari) . "\n cm.";
