<?php

// Fungsi untuk memeriksa validitas lembar suara
function cekSuaraSah($lembarSuara) {
    // Memeriksa apakah ada karakter selain '(' ')' atau 'x'
    if (preg_match('/[^\(\)x]/', $lembarSuara)) {
        return "tidak sah";
    }
    
    // Memeriksa apakah ada karakter 'x' di luar area coblos
    if (preg_match('/x(?!\))/', $lembarSuara)) {
        return "tidak sah";
    }

    // Menghapus area coblos yang kosong
    $lembarSuara = str_replace('()', '', $lembarSuara);

    // Memeriksa apakah area coblos yang tersisa valid
    if (!empty($lembarSuara) && !preg_match('/\(x\)/', $lembarSuara)) {
        return "tidak sah";
    }
    
    // Memeriksa apakah ada lebih dari satu 'x' dalam area coblos
    if (!preg_match('/\(x+\)/', $lembarSuara)) {
        return "tidak sah";
    }

    // Jika semua kondisi terpenuhi, lembar suara dianggap sah
    return "sah";
}

?>
