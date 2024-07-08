<?php

function siapBankai($tingkatKekuatan, $pemahaman){
if($tingkatKekuatan >= 8 && $pemahaman >= 8){
    return true;
}else{
    return false;
}
}