

<?php
    // Diberikan sebuah          dimana setiap huruf unik harus diubah menjadi angka dari 0 sampai 9 sehingga persamaan aritmatika menjadi benar. Setiap huruf berbeda mewakili angka yang berbeda. Tidak ada angka yang dimulai dengan angka 0 kecuali angka itu sendiri.

    // Format Input:

    // Baris pertama berisi dua bilangan bulat N dan M (1 ≤ N, M ≤ 5) yang menunjukkan jumlah baris pada sisi kiri dan sisi kanan persamaan.
    // N baris berikutnya berisi kata-kata yang menunjukkan sisi kiri persamaan.
    // M baris terakhir berisi satu kata yang menunjukkan hasil penjumlahan.
    // Format Output:

    // Jika ada solusi, cetak mapping huruf ke angka. Jika ada lebih dari satu solusi, cetak salah satu solusi yang valid.
    // Jika tidak ada solusi, cetak "No solution".


    function solveCryptarithm($leftWords, $rightWord) {
        $letters = array_unique(str_split(implode('', $leftWords) . $rightWord));
        $numLetters = count($letters);
    
        if ($numLetters > 10) {
            return false; // Lebih dari 10 huruf unik tidak bisa dipetakan ke digit 0-9.
        }
    
        $map = array_fill_keys($letters, -1); // Inisialisasi pemetaan
        $usedDigits = array_fill(0, 10, false); // Melacak digit yang sudah digunakan
    
        if (backtrack($map, $usedDigits, $letters, $leftWords, $rightWord)) {
            return $map;
        }
    
        return false;
    }
    
    function backtrack(&$map, &$usedDigits, $letters, $leftWords, $rightWord) {
        if (empty(array_filter($map, function($val) { return $val == -1; }))) {
            $numbers = array_map(function($word) use ($map) {
                return strtr($word, $map);
            }, $leftWords);
            $resultNumber = strtr($rightWord, $map);
    
            $numbers = array_map('intval', $numbers);
            $resultNumber = intval($resultNumber);
    
            if (array_sum($numbers) == $resultNumber) {
                return true;
            }
    
            return false;
        }
    
        $nextLetter = array_search(-1, $map);
        for ($digit = 0; $digit < 10; $digit++) {
            if ($usedDigits[$digit] || ($digit == 0 && startsWithZero($nextLetter, $leftWords, $rightWord))) {
                continue;
            }
    
            $map[$nextLetter] = $digit;
            $usedDigits[$digit] = true;
    
            if (backtrack($map, $usedDigits, $letters, $leftWords, $rightWord)) {
                return true;
            }
    
            $map[$nextLetter] = -1;
            $usedDigits[$digit] = false;
        }
    
        return false;
    }
    
    function startsWithZero($letter, $leftWords, $rightWord) {
        return in_array($letter, array_map('substr', $leftWords, array_fill(0, count($leftWords), 0), array_fill(0, count($leftWords), 1))) || $letter == $rightWord[0];
    }
    
    // Definisikan array input secara langsung
    $leftWords = ["SEND", "MORE"];
    $rightWord = "MONEY";
    
    $solution = solveCryptarithm($leftWords, $rightWord);
    
    if ($solution) {
        echo "Solution found:\n";
        foreach ($solution as $letter => $digit) {
            echo "$letter => $digit\n";
        }
    
        // Hitung dan tampilkan hasil penjumlahan
        $numbers = array_map(function($word) use ($solution) {
            return intval(strtr($word, $solution));
        }, $leftWords);
        $resultNumber = intval(strtr($rightWord, $solution));
    
        echo "Sum: " . implode(' + ', $numbers) . " = " . $resultNumber . "\n";
    } else {
        echo "No solution\n";
    }
    ?>
    

