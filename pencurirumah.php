<?php

// Fungsi untuk mencari jumlah uang maksimum yang dapat dicuri tanpa bertemu dengan dua rumah yang berdekatan
function pencuriRumah($rumah){
    $n = count($rumah);

    // Jika tidak ada rumah, maka jumlah uang maksimum yang dapat dicuri adalah 0
    if ($n == 0) return 0;

    // Jika hanya ada satu rumah, maka jumlah uang maksimum yang dapat dicuri adalah uang di rumah tersebut
    if ($n == 1) return $rumah[0];

    // Inisialisasi variabel untuk menyimpan hasil maksimum
    $prev1 = 0; // Menyimpan hasil dari dua rumah sebelumnya
    $prev2 = 0; // Menyimpan hasil dari tiga rumah sebelumnya

    // Iterasi melalui array rumah
    foreach ($rumah as $money) {
        // Simpan nilai sementara dari $prev1
        $temp = $prev1;

        // Hitung hasil maksimum yang dapat dicuri pada saat ini
        $prev1 = max($prev2 + $money, $prev1);

        // Geser nilai $prev2 dengan nilai sementara $prev1
        $prev2 = $temp;
    }

    // Kembalikan jumlah uang maksimum yang dapat dicuri
    return $prev1;
}

?>
