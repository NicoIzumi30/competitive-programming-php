<?php

function daftarTokohPenting($daftarNama){
$TokohPenting = ['SOENARIO', 'SASTROWARDOYO', 'AMIR SYARIFUDDIN HARAHAP', 'MOHAMMAD YAMIN','DJOKO MARSAID','SOEGONDO DJOJOPOESPITO',
'JOHANNES LEIMENA','SARMIDI MANGOENSARKORO','JOHAN MOHAMMAD CAI','RUMONDOR CORNELIS LEFRAND SENDUK','MOHAMMAD ROCHJANI SUUD','R KATJA SOENGKANA',
'WAGE RUDOLF SOEPRATMAN','THEODORA ATHIA SALIM'];
$tokohYangDitemukan = [];
foreach($daftarNama as $nama){
foreach($TokohPenting as $tokoh){
    if($nama == $tokoh){
        $tokohYangDitemukan[] = $tokoh;
    }
}
}
if(count($tokohYangDitemukan) > 0){
    if(count($tokohYangDitemukan) == 1){
        return $tokohYangDitemukan[0];
    }else{
        return implode(', ',$tokohYangDitemukan);
    }
}
return "NAMA TOKOH PENTING TIDAK DITEMUKAN";
}