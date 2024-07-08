<?php

function pecahKode($karakter, $kode1, $kode2){
    $hasil = str_replace([$kode1, $kode2], '', $karakter);
    return $hasil;
}