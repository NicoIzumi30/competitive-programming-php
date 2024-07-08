<?php

// Fungsi untuk mengambil pasangan calon presiden berdasarkan nomor urut
function pasanganPresiden($namaCalon, $noUrut){
    // Menghitung jumlah pasangan calon dari array $namaCalon
    $jumlahPasangan = count($namaCalon) / 2;
    
    // Jika nomor urut di luar rentang yang valid, kembalikan array dengan elemen "kosong"
    if ($noUrut < 1 || $noUrut > $jumlahPasangan) {
        return ["kosong"];
    }
    
    // Menghitung indeks awal dari pasangan calon berdasarkan nomor urut
    $index = ($noUrut - 1) * 2;
    
    // Mengembalikan array slice dari $namaCalon, dimulai dari $index dengan panjang 2 (untuk mengambil pasangan)
    return array_slice($namaCalon, $index, 2);
}

?>
