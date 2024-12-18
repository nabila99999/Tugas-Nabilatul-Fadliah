<?php
// Membuat array multidimensi untuk menyimpan data kota
$kota = array(
    array("Indonesia", "D.K.I. Jakarta", +62),
    array("Singapura", "Singapura", +65),
    array("Malaysia", "Kuala Lumpur", +60),
    array("Brunei", "Bandar Seri Begawan", +673),
    array("Thailand", "Bangkok", +66),
    array("Laos", "Vientiane", +856),
    array("Filipina", "Manila", +63),
    array("Myanmar", "Naypyidaw", +95),
   
   
   
    // Tambahkan data kota lain sesuai kebutuhan
);

// Membuat tabel HTML untuk menampilkan data
echo "<table>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";

// Mengulang setiap elemen dalam array kota
foreach ($kota as $kota) {
    echo "<tr>";
    foreach ($kota as $data) {
        echo "<td>" . $data . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>