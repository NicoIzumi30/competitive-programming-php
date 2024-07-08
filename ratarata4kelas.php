<?php

function rataRataTertinggi($nilaiKelasA, $nilaiKelasB, $nilaiKelasC, $nilaiKelasD){
$avgA = array_sum($nilaiKelasA)/count($nilaiKelasA);
$avgB = array_sum($nilaiKelasB)/count($nilaiKelasB);
$avgC = array_sum($nilaiKelasC)/count($nilaiKelasC);
$avgD = array_sum($nilaiKelasD)/count($nilaiKelasD);
 $rataRataKelas = [
        "Kelas A" => $avgA,
        "Kelas B" => $avgB,
        "Kelas C" => $avgC,
        "Kelas D" => $avgD
    ];
arsort($rataRataKelas);
return implode(', ', array_keys($rataRataKelas));
}