<?php

// Fungsi untuk menghitung jumlah jawaban benar dalam tes
function hitungJawabanBenar($testSoal, $jawabanPeserta){
    // Inisialisasi variabel untuk menghitung jawaban benar
    $jawaban_benar = 0;
    
    // Loop melalui setiap soal dalam tes
    for ($i = 0; $i < count($testSoal); $i++) {
        $soal = $testSoal[$i];
        $jawaban = $jawabanPeserta[$i];
        
        // Jika soal adalah angka
        if (ctype_digit($soal)) {
            $angka1 = intval(substr($soal, 0, 1)); // Ambil digit pertama
            $angka2 = intval(substr($soal, 1, 1)); // Ambil digit kedua
            // Periksa apakah jumlah dua digit sama dengan jawaban peserta
            $jawaban_benar += ($angka1 + $angka2 == intval($jawaban)) ? 1 : 0;
        } 
        // Jika soal adalah string yang dibalik sama dengan jawaban
        elseif ($soal === strrev($jawaban)) {
            $jawaban_benar += 1;
        } 
        // Jika jawaban adalah "benar"
        elseif ($jawaban === "benar") {
            $parts = explode('=', $soal); // Pisahkan soal berdasarkan tanda "="
            $kata1 = str_replace(' ', '', $parts[0]); // Hapus spasi dari bagian pertama
            $kata2 = str_replace(' ', '', $parts[1]); // Hapus spasi dari bagian kedua
            
            $sorted1 = str_split($kata1); // Pisahkan kata pertama menjadi array karakter
            $sorted2 = str_split($kata2); // Pisahkan kata kedua menjadi array karakter
            sort($sorted1); // Urutkan karakter dalam kata pertama
            sort($sorted2); // Urutkan karakter dalam kata kedua
            
            // Periksa apakah kedua kata yang diurutkan sama
            $jawaban_benar += ($sorted1 === $sorted2) ? 1 : 0;
        }
    }
    
    // Kembalikan jumlah jawaban benar
    return $jawaban_benar;
}
?>
