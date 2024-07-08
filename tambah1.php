<?php

function plusOne($nums){
    $n = count($nums);

    // Mulai dari digit paling kanan
    for ($i = $n - 1; $i >= 0; $i--) {
        // Jika digit saat ini kurang dari 9, cukup tambahkan 1 dan return hasilnya
        if ($nums[$i] < 9) {
            $nums[$i]++;
            return $nums;
        }
        
        // Jika digit saat ini adalah 9, set ke 0 dan lanjutkan loop untuk carry
        $nums[$i] = 0;
    }

    // Jika semua digit adalah 9, kita butuh tambahan satu digit di depan dengan nilai 1
    array_unshift($nums, 1);
    return $nums;
}