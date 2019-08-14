<?php
$gol = 20;


if ($gol>=10) {
    echo "Mendali Emas, dengan total cetak gol : ".$gol;
    switch ($gol) {
        case 20:
            echo " Mendpatkan Bonus 100jt";
            break;
        
        default:
            # code...
            break;
    } 
}elseif ($gol>=8) {
    echo "Mendali perak, dengan total cetak gol : ".$gol;
    switch ($gol) {
        case 9:
            echo "Mendapatkan bonus 80jt";
            break;
        
        default:
            # code...
            break;
    }
}elseif ($gol>=4) {
    echo "Mendali perunggu, dengan total cetak gol : ".$gol;
    switch ($gol) {
        case 4:
            echo "Mendapatkan Bonus 50jt";
            break;
        
        default:
            # code...
            break;
    }
}elseif ($gol<4) {
    echo "Mendali emas ngambang, dengan total cetak gol : ".$gol;
    switch ($gol) {
        case 0:
            echo "Tidak mendapatkan bonus";
            break;
        
        default:
            # code...
            break;
    }
}
?>