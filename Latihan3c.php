<?php
// Membuat array warna
$warna = ["hijau", "kuning", "kelabu", "merah muda"];

// Teks yang akan ditampilkan dengan placeholder untuk warna
$teks = "Balonku ada lima.
Rupa-rupa warna-nnya
%s, %s, %s, %s, dan biru
Meletus balon %s DOR!!!
Hatiku sangat kacau..";

// Mengisi placeholder dengan nilai dari array
$teks_lengkap = sprintf($teks, $warna[0], $warna[1], $warna[2], $warna[3], $warna[0]);

// Menampilkan teks lengkap
echo $teks_lengkap;