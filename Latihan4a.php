<?php
// Membuat array negara ASEAN awal
$negaraAsean = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

// Menampilkan daftar negara ASEAN awal dalam bentuk HTML
echo "<h2>Daftar Negara ASEAN awal:</h2><ul>";
foreach ($negaraAsean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";

// Menambahkan negara baru ke dalam array
$negaraAsean[] = "Laos";
$negaraAsean[] = "Filipina";
$negaraAsean[] = "Myanmar";

// Menampilkan daftar negara ASEAN baru dalam bentuk HTML
echo "<h2>Daftar Negara ASEAN baru:</h2><ul>";
foreach ($negaraAsean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";