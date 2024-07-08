<?php

function klasifikasiHero($kekuatan, $penghargaan){
if ($kekuatan >= 3000 && $penghargaan >= 30) {
        return "S";
    } elseif ($kekuatan >= 2000 && $penghargaan >= 20) {
        return "A";
    } elseif ($kekuatan >= 1000 && $penghargaan >= 10) {
        return "B";
    } else {
        return "C";
    }
}