<?php

// Fungsi untuk membagi daftar murid menjadi kelompok-kelompok berpasangan
function pembagianKelompok($daftarMurid){
    // Inisialisasi array untuk menyimpan kelompok
    $kelompok = [];

    // Selama masih ada lebih dari satu murid dalam daftar
    while (count($daftarMurid) > 1) {
        // Ambil murid pertama dari awal array
        $muridPertama = array_shift($daftarMurid);
        // Ambil murid terakhir dari akhir array
        $muridTerakhir = array_pop($daftarMurid);
        // Tambahkan pasangan murid ke dalam array kelompok
        $kelompok[] = "($muridPertama, $muridTerakhir)";
    }

    // Jika masih ada satu murid tersisa yang belum dipasangkan
    if (count($daftarMurid) == 1) {
        // Tambahkan murid tersebut sebagai kelompok terakhir dengan format khusus
        $kelompok[] = "({$daftarMurid[0]})";
    }

    // Gabungkan semua kelompok menjadi satu string dengan pemisah koma
    return implode(', ', $kelompok);
}

?>
