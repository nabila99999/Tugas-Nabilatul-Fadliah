<?php
// Contoh variabel
$var1 = "Hello";
$var2 = "";
$var3 = null;
$var4 = 0;
$var5 = array();

// Menggunakan isset()
if (isset($var1)) {
    echo "Variabel var1 telah dideklarasikan dan memiliki nilai.<br>";
}

if (isset($var3)) {
    echo "Variabel var3 telah dideklarasikan dan memiliki nilai.<br>"; // Tidak akan dieksekusi karena var3 bernilai null
}

// Menggunakan empty()
if (empty($var2)) {
    echo "Variabel var2 kosong atau belum dideklarasikan.<br>";
}

if (empty($var4)) {
    echo "Variabel var4 dianggap kosong karena bernilai 0.<br>";
}

if (empty($var5)) {
    echo "Variabel var5 dianggap kosong karena merupakan array kosong.<br>";
}