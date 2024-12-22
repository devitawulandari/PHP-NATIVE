<?php
// Deklarasi array siswa
$siswa = array(
    array(135410154, "Bima", "Teknik Kendaraan Ringan"),
    array(125610983, "Nisa", "Teknik Kendaraan Ringan"),
    array(135596948, "Pandu", "Multimedia"),
    array(145293833, "Niken", "Teknik Komputer dan Jaringan")
);

// Jumlah siswa (baris)
$jumlahSiswa = count($siswa);

// Jumlah kolom data per siswa
$jumlahKolom = count($siswa[0]);

// Perulangan untuk setiap siswa
for ($row = 0; $row < $jumlahSiswa; $row++) {
    echo "<p><b>Siswa Index Ke-$row</b></p>";
    echo "<ul>";

    // Perulangan untuk setiap kolom data siswa
    for ($col = 0; $col < $jumlahKolom; $col++) {
        echo "<li>".$siswa[$row][$col]."</li>";
    }

    echo "</ul>";
}
?>