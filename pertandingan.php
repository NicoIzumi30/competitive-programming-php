<?php 
// Dalam sebuah pertandingan olahraga, Budi diberikan kesempatan untuk memilih urutan pemain yang harus dilawannya. Asumsikan ada N orang lawan yang masing-masing memiliki tingkat kemahiran Ai. Setelah Budi berhasil mengalahkan pemain ke-i, tingkat kemahirannya akan bertambah sebanyak Bi yang akan digunakan untuk melawan pemain selanjutnya. Perlu diingat bahwa Budi hanya bisa mengalahkan pemain dengan tingkat kemahiran yang lebih rendah atau sama dengan dirinya sendiri. Jika Budi memiliki tingkat kemahiran awal M, tentukan pemain manakah yang harus dilawan Budi secara berurutan sampai dia tidak bisa lagi mengalahkan lawannya sehingga Budi mendapatkan tingkat kemahiran yang maksimal.
// Format Masukan
// Baris pertama dua buah bilangan N dan M (1≤N, M≤100)

// Baris kedua N buah bilangan Ai (1≤Ai≤1000)

// Baris ketiga N buah bilangan Bi (1≤Bi≤1000)

// Format Keluaran
// Tingkat kemahiran maksimal yang akan didapatkan Budi.
// Contoh Masukan 1

// 4 2

// 8 9 3 2

// 5 4 1 3

// Contoh Keluaran 1


// 6
function tingkat_kemahiran_maksimal($n, $m, $A, $B) {
    // Gabungkan A dan B menjadi daftar pasangan
    $pemain = [];
    for ($i = 0; $i < $n; $i++) {
        $pemain[] = [$A[$i], $B[$i]];
    }
    
    // Urutkan pemain berdasarkan tingkat kemahiran Ai
    usort($pemain, function($a, $b) {
        return $a[0] - $b[0];
    });
    
    // Mulai dengan tingkat kemahiran awal M
    $skill = $m;
    
    // Lawan pemain secara berurutan dari tingkat kemahiran terendah
    foreach ($pemain as $p) {
        list($ai, $bi) = $p;
        if ($skill >= $ai) {
            $skill += $bi;
        }
    }
    
    return $skill;
}

// Membaca input
fscanf(STDIN, "%d %d", $n, $m);
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));
$B = array_map('intval', explode(' ', trim(fgets(STDIN))));

// Menjalankan fungsi dan mencetak hasil
echo tingkat_kemahiran_maksimal($n, $m, $A, $B) . "\n";

?>