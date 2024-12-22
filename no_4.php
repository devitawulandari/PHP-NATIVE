<?php
echo"kode program PHP -Menghitung luas persegi";
echo"<hr>";

function HitungLuas($sisi){
    return $sisi * $sisi;
}
$sisi=5;
$luas=HitungLuas($sisi);
echo "Luas Persegi Dengan Sisi $sisi adalah $luas";
?>