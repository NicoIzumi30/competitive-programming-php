<?php

function jumlahKoinEmas($lawan, $kemampuanLance, $jumlahKoinPerak){
$koinPerak = $jumlahKoinPerak;
$koinEmas = 0;
foreach($lawan as $row){
    if($kemampuanLance > $row){
        if($row < 50){
            $koinPerak+=1;

        }elseif($row  < 80){
            $koinPerak+=2;

        }elseif($row <= 100){
            $koinPerak+=3;
        }
    }else{
        $koinPerak--;
    }
}
if($koinPerak >= 5){
$koinEmas = floor($koinPerak/5);
}
return $koinEmas;
}

function jumlahKoinEmas2($lawan, $kemampuanLance, $jumlahKoinPerak){
    $koin_perak = $jumlahKoinPerak; // Inisialisasi jumlah koin perak dari parameter
    $koin_emas = 0; // Inisialisasi jumlah koin emas
    
    // Iterasi melalui setiap kekuatan lawan dalam array $lawan
    foreach ($lawan as $kekuatan) {
        // Memeriksa apakah kemampuan Lance lebih besar dari kekuatan lawan
        if ($kemampuanLance > $kekuatan) {
            // Jika kekuatan lawan kurang dari 50, tambahkan 1 koin perak
            if ($kekuatan < 50) {
                $koin_perak += 1;
            } 
            // Jika kekuatan lawan kurang dari 80, tambahkan 2 koin perak
            elseif ($kekuatan < 80) {
                $koin_perak += 2;
            } 
            // Jika kekuatan lawan antara 80 sampai 100, tambahkan 3 koin perak
            elseif ($kekuatan <= 100) {
                $koin_perak += 3;
            }
        } else {
            // Jika kekuatan Lance tidak lebih besar dari kekuatan lawan, kurangi 1 koin perak
            $koin_perak -= 1;
        }
        
        // Jika jumlah koin perak mencapai 5 atau lebih, konversi ke koin emas
        if ($koin_perak >= 5) {
            $koin_emas += intdiv($koin_perak, 5); // Tambahkan jumlah koin emas berdasarkan pembagian hasil bagi
            $koin_perak = $koin_perak % 5; // Sisa dari pembagian menjadi jumlah koin perak yang tersisa
        }
    }
    
    // Kembalikan jumlah total koin emas yang terkumpul
    return $koin_emas;
}
