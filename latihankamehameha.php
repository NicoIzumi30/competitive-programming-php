<?php

function latihanKamehameha($jarakTarget, $kondisiAwal){
    $jumlahPercobaan = 1;
    $jarakGoku = $kondisiAwal;

    while ($jarakGoku < $jarakTarget) {
        $jarakGoku += 3;
        $jumlahPercobaan++;
    }

    return $jumlahPercobaan;
}