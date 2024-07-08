<?php

// Fungsi untuk mendeteksi apakah ada setidaknya tiga karakter unik yang sama di antara dua nama karakter
function deteksiVusion($namaKarakter1, $namaKarakter2){
    // Mengubah nama karakter pertama menjadi huruf kecil, memisahkannya menjadi array karakter, dan mengambil karakter unik
    $chars1 = array_unique(str_split(strtolower($namaKarakter1)));
    
    // Mengubah nama karakter kedua menjadi huruf kecil, memisahkannya menjadi array karakter, dan mengambil karakter unik
    $chars2 = array_unique(str_split(strtolower($namaKarakter2)));
    
    // Mencari karakter yang sama di antara dua array karakter unik
    $intersection = array_intersect($chars1, $chars2);
    
    // Mengembalikan true jika jumlah karakter yang sama minimal 3, otherwise false
    return count($intersection) >= 3;
}

?>
