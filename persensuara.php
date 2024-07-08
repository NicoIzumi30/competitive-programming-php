<?php

function persentaseSuara($populasiHela, $populasiSakaar, $populasiXandar) {
    $total_populasi = $populasiHela + $populasiSakaar + $populasiXandar;
    $populasiKonoha = 1000000;
    $persentase_suara = ($total_populasi / $populasiKonoha) * 100;
    $hasil = number_format($persentase_suara, 2). "%";
    return $hasil;
}