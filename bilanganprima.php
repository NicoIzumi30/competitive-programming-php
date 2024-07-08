<?php

// Fungsi untuk memeriksa apakah suatu bilangan adalah bilangan prima
function isPrime($num){
    // Jika bilangan kurang dari atau sama dengan 1, maka bukan bilangan prima
    if ($num <= 1) {
        return false;
    }
    // Loop dari 2 sampai akar kuadrat dari $num
    for ($i = 2; $i <= sqrt($num); $i++) {
        // Jika $num habis dibagi $i, maka bukan bilangan prima
        if ($num % $i == 0) {
            return false;
        }
    }
    // Jika tidak ada pembagi selain 1 dan $num itu sendiri, maka $num adalah bilangan prima
    return true;
}
?>
