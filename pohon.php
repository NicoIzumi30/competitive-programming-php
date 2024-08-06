<?php 
// Untuk menghilangkan penat Pak Blangkon sering sekali jalan-jalan ke pekarangan di belakang rumahnya. Saat berada di posisi tertentu Pak Blangkon menyadari bahwa di sekelilingnya ada N buah pohon. Namun, karena terbatasnya pandangan hanya beberapa pohon saja yang bisa terlihat oleh Pak Blankon, karena pohon tertentu berada tepat di belakang pohon lainnya saat pandangan tertuju pada arah tertentu. Jika dilihat dari atas dalam koordinat dua dimensi, Pak Blangkon ada di posisi (x,y) sedangkan pohon-pohonnya ada di posisi (pi,qi). Seperti contoh pada gambar di bawah ini:
// Seperti terlihat pada gambar di atas dari 8 pohon, hanya 5 yang bisa dilihat secara langsung oleh Pak Blangkon, sedangkan tiga pohon lainnya terhalang oleh pohon di depannya. Jika diketahui lokasi Pak Blangkon beserta N buah pohon, buatlah program untuk menghitung banyaknya pohon yang bisa terlihat secara langsung oleh Pak Blangkon.

// Format Masukan
// Baris pertama adalah N, X dan Y yang menyatakan banyaknya pohon dan posisi Pak Blangkon di mana 2 ≤ N ≤ 100. N baris berikutnya berisi pi dan qi yang menyatakan posisi pohon ke-i, di mana 0 ≤ X,Y,pi,qi ≤ 1000.
// Format Keluaran
// Banyaknya pohon yang dapat dilihat Pak Blangkon.

// Contoh Masukan

// 8 4 2

// 1 5

// 2 1

// 2 4

// 3 3

// 6 3

// 6 6

// 7 7

// 10 5
// Contoh Keluaran

// 5

function visible_trees($n, $x, $y, $trees) {
    $slopes = [];
    
    foreach ($trees as $tree) {
        list($px, $py) = $tree;
        $dx = $px - $x;
        $dy = $py - $y;
        $slope = $dx == 0 ? INF : $dy / $dx;
        $slopes[$slope] = true;
    }
    
    return count($slopes);
}

// Membaca input
$data = explode(' ', trim(fgets(STDIN)));
$n = intval($data[0]);
$x = intval($data[1]);
$y = intval($data[2]);
$trees = [];

for ($i = 0; $i < $n; $i++) {
    $tree = explode(' ', trim(fgets(STDIN)));
    $trees[] = [intval($tree[0]), intval($tree[1])];
}

// Menjalankan fungsi dan mencetak hasil
echo visible_trees($n, $x, $y, $trees) . "\n";


?>