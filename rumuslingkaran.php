<?php

function luasLingkaran($kekuatan){
$r = $kekuatan/10/2;
$rkuadrat = $r*$r;
$rumus = 3.14*$rkuadrat;
return number_format($rumus, 2, '.', '');
}