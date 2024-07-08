<?php 
// Fungsi untuk memindahkan elemen 'Orihime' ke posisi terakhir dalam array
function urutkanKarakter($posisiKarakter){
    $no = 0;
    // Loop melalui setiap elemen dalam array
    foreach($posisiKarakter as $row){
        $index = $no++;
        // Jika elemen adalah 'Orihime', hapus elemen tersebut dari array
        if($row == 'Orihime'){
            unset($posisiKarakter[$index]);
        }
    }
    // Tambahkan 'Orihime' kembali ke akhir array
    array_push($posisiKarakter,'Orihime');
    return $posisiKarakter;
}

// Fungsi lain untuk memindahkan elemen 'Orihime' ke posisi terakhir dalam array
function urutkanKarakter2($posisiKarakter){
    $elemen = "Orihime";
    // Cari indeks elemen 'Orihime' dalam array
    $indeks = array_search($elemen, $posisiKarakter);
    // Jika elemen ditemukan, hapus elemen tersebut dari array
    if ($indeks !== false) {
        unset($posisiKarakter[$indeks]);
        // Tambahkan 'Orihime' kembali ke akhir array
        array_push($posisiKarakter, $elemen);
    }
    return $posisiKarakter;
}
?>
