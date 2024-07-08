<?php

// Fungsi untuk mencari Faktor Persekutuan Terbesar (FPB) dari dua bilangan
function solution($a, $b){
    // Melakukan iterasi menggunakan algoritma Euclidean
    while ($b != 0) {
        // Simpan nilai b sementara
        $temp = $b;
        // Hitung sisa pembagian a dengan b
        $b = $a % $b;
        // Asumsikan b sebagai a, dan sisa pembagian sebagai b
        $a = $temp;
    }
    // Kembalikan nilai a sebagai FPB dari dua bilangan
    return $a;
}

?>
