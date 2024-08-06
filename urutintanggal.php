<?php
// Array tanggal
$tanggal_foto = ['21 November 1998', '02 Januari 2001', '13 Februari 1998', '30 Juli 2000', '30 Desember 2004'];

// Mapping bulan dalam bahasa Indonesia ke bahasa Inggris
$bulan_mapping = [
    'Januari' => 'January',
    'Februari' => 'February',
    'Maret' => 'March',
    'April' => 'April',
    'Mei' => 'May',
    'Juni' => 'June',
    'Juli' => 'July',
    'Agustus' => 'August',
    'September' => 'September',
    'Oktober' => 'October',
    'November' => 'November',
    'Desember' => 'December'
];

// Fungsi untuk mengonversi tanggal dari bahasa Indonesia ke format yang dikenali
function convert_date_to_english($date) {
    global $bulan_mapping;
    foreach ($bulan_mapping as $ind => $eng) {
        if (strpos($date, $ind) !== false) {
            $date = str_replace($ind, $eng, $date);
            break;
        }
    }
    return $date;
}

// Fungsi untuk membandingkan dua tanggal
function compare_dates($a, $b) {
    $dateA = DateTime::createFromFormat('d F Y', convert_date_to_english($a));
    $dateB = DateTime::createFromFormat('d F Y', convert_date_to_english($b));

    if (!$dateA || !$dateB) {
        echo "Error parsing dates: $a or $b\n";
        return 0;
    }

    // Debugging output
    // echo "Comparing $a (" . $dateA->format('Y-m-d') . ") with $b (" . $dateB->format('Y-m-d') . ")\n";

    if ($dateA == $dateB) {
        return 0;
    }
    return ($dateA < $dateB) ? -1 : 1;
}

// Mengurutkan array tanggal
usort($tanggal_foto, 'compare_dates');

// Menambahkan "dan" sebelum tanggal terakhir
if (count($tanggal_foto) > 1) {
    $last_date = array_pop($tanggal_foto);
    $tanggal_foto_string = implode(', ', $tanggal_foto) . ', dan ' . $last_date;
} else {
    $tanggal_foto_string = $tanggal_foto[0];
}

// Output hasil
echo $tanggal_foto_string;
?>
