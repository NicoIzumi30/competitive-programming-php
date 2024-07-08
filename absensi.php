<?php

// Fungsi untuk mengatur absensi murid baru
function absensiMuridBaru($daftarNama){
   // Mengurutkan daftar nama secara alfabetis
   sort($daftarNama);
   
   // Menghitung jumlah elemen dalam array $daftarNama
   $count = count($daftarNama);
   
   // Jika jumlah elemen lebih dari 1
    if ($count > 1) {
        // Menggabungkan semua elemen kecuali elemen terakhir dengan koma dan spasi
        // dan menambahkan 'dan' sebelum elemen terakhir
        $daftarNamaString = implode(', ', array_slice($daftarNama, 0, -1)) . ', dan ' . end($daftarNama);
    } else {
        // Jika hanya ada satu elemen, tidak perlu menambahkan koma atau 'dan'
        $daftarNamaString = $daftarNama[0];
    }
    
    // Mengembalikan string yang berisi daftar nama yang sudah diatur
    return "Absensi: ".$daftarNamaString;
}
?>
