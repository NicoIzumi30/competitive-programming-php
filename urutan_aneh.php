<?php 

// 1. Urutan Aneh
// Deskripsi
// Buatlah program yang melakukan pengurutan N (2≤N≤1000) buah bilangan seperti pada contoh kasus di bawah ini.

// Format Masukan
// Baris pertama berisi satu buah bilangan N.

// Baris kedua berisi N buah bilangan bulat Xi.

// Setiap bilangan dipastikan hanya antara 0-100.

// Format Keluaran
// N buah baris berisi urutan bilangan sesuai dengan contoh
// Contoh Masukan

// 10

// 1 11 12 2 13 23 31 62 71 81

// Contoh Keluaran

// 1

// 11

// 31

// 71

// 81

// 2

// 12

// 62

// 13

// 23

function urutkanAneh($n, $angka) {
    // Kelompokkan angka berdasarkan digit terakhir
    $digitTerakhir = array_fill(0, 10, []);
    
    foreach ($angka as $num) {
        $digitTerakhir[$num % 10][] = $num;
    }
    
    // Cetak angka berdasarkan urutan digit terakhir
    for ($i = 0; $i < 10; $i++) {
        sort($digitTerakhir[$i]);
        foreach ($digitTerakhir[$i] as $num) {
            echo $num . "\n";
        }
    }
}

// Membaca input
$n = intval(trim(fgets(STDIN)));
$angka = array_map('intval', explode(' ', trim(fgets(STDIN))));

// Menjalankan fungsi
urutkanAneh($n, $angka);



?>