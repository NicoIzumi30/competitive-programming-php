<?php

// Fungsi untuk mengelompokkan dan mengurutkan anggota berdasarkan divisi mereka
function kelompokDivisi($daftarAnggota){
    // Daftar ketua divisi beserta nama mereka
    $ketuaDivisi = [
        'd1' => 'Genryusai',
        'd2' => 'Soi',
        'd3' => 'Gin',
        'd4' => 'Retsu',
        'd5' => 'Sousuke',
        'd6' => 'Byakuya',
        'd7' => 'Sajin',
        'd8' => 'Shunsui',
        'd9' => 'Kaname',
        'd10' => 'Toshiro',
        'd11' => 'Kenpachi',
        'd12' => 'Mayuri',
    ];

    // Inisialisasi array untuk menyimpan jumlah anggota setiap divisi
    $divisiCount = [];

    // Iterasi melalui setiap anggota dalam daftar anggota
    foreach ($daftarAnggota as $anggota) {
        // Memeriksa apakah anggota memiliki format divisi (misalnya 'd1', 'd2', dll.)
        preg_match('/d\d+$/', $anggota, $matches);
        if ($matches) {
            $divisi = $matches[0];
            // Jika divisi belum ada dalam array $divisiCount, inisialisasi dengan nilai 0
            if (!isset($divisiCount[$divisi])) {
                $divisiCount[$divisi] = 0;
            }
            // Tambahkan 1 ke jumlah anggota divisi tersebut
            $divisiCount[$divisi]++;
        }
    }

    // Mengurutkan $divisiCount berdasarkan jumlah anggota secara descending,
    // dan jika ada jumlah yang sama, urutkan berdasarkan nomor divisi secara ascending
    uksort($divisiCount, function($a, $b) use ($divisiCount) {
        if ($divisiCount[$a] === $divisiCount[$b]) {
            return intval(substr($a, 1)) - intval(substr($b, 1));
        }
        return $divisiCount[$b] - $divisiCount[$a];
    });

    // Menghasilkan array hasil yang berisi nama ketua divisi berdasarkan urutan $divisiCount
    $result = array_map(function($divisi) use ($ketuaDivisi) {
        return $ketuaDivisi[$divisi];
    }, array_keys($divisiCount));

    // Mengembalikan hasil
    return $result;
}