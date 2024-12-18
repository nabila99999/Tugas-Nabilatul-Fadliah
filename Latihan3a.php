<?php
function ganti_style($teks, $kelas) {
    return "<span class='$kelas'>$teks</span>";
}

// Contoh penggunaan
$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

echo ganti_style($tulisan, $kelas);
?>