<?php 
// fscanf(STDIN,"%d",$n);
// $sum = 0;
// for($i=0;$i<$n;$i++){
//     fscanf(STDIN,"%d",$a[$i]);
//     $sum += $a[$i];
// }
// $avg = $sum / $n;
// echo $avg;

// $nilai = [10,20,33,12,6,9,10,33,21];
// $total_nilai = array_sum($nilai);
// $n = count($nilai);
// $avg = $total_nilai / $n;
// echo $avg;


function solution($arrNilai){
$totalNilai = array_sum($arrNilai);
$n = count($arrNilai);
$avg = $totalNilai/$n;
$realAvg = number_format($avg,2);
return $realAvg;
}
?>