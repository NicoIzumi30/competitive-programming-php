<?php

function solution($levelBaterai){
 if ($levelBaterai > 80) {
        return 'Penuh';
    } elseif ($levelBaterai >= 20 && $levelBaterai <= 80) {
        return 'Sedang';
    } elseif($levelBaterai < 20) {
        return 'Rendah';
    }
}