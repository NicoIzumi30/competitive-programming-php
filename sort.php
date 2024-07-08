<?php

function solution($arrBuah, $isAscending){
if($isAscending == true){
    sort($arrBuah);
}else{
    rsort($arrBuah);
}
return $arrBuah;
}