File Proses <hr/>
<?php
$nilai= 60;
echo "Nilai Anda=" . $nilai . "<br/>";

if ($nilai > 100){
 echo "Nilai Kelebihan";
}else if ($nilai > 70){
 echo "Selamt Anda lulus ujian";
}else if ($nilai > 40){
 echo "Anda harus Ujian Lagi";
}else{
 echo "Maaf, Gagal";
}
?>