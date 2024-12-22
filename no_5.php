<?php  
echo"Menghitung Luas, Keliling, dan Segitiga";
echo "<hr>";

function HitungSisiSegitiga($a, $b){
     return sqrt (($a * $a) + ($b * $b));

}

function HitungLuasSegitiga($alas, $tinggi){
    return 0.5 * $alas * $tinggi;

}

function HitungKelilingSegitiga($a, $b, $c){
    return $a + $b + $c;

}


$a = 6;
$b = 8;
$c = HitungSisiSegitiga ($a, $b);

$luas= HitungLuasSegitiga ($a, $b);
$keliling= HitungKelilingSegitiga ($a, $b, $c);

echo "sisi miring segitiga dengan sisi $a dan $b adalah $c <br>";
echo "luas segitiga dengan alas $a dan tinggi $b adalah $luas <br>";
echo "sisi miring segitiga dengan sisi $a, $b dan $c adalah $keliling";

?>