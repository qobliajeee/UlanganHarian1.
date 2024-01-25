<?php
$namaPemesan = "Novel Fizar";
$nomorWhatsapp = "082115558771";
$alamat = "JL.Keadilan dalam II No.20";
$tipeKamar = "deluxe";
$hargaPerMalam = 200000;
$lamaMenginap = 4;


$diskon = 0;

if ($tipeKamar == "deluxe" && $lamaMenginap > 4) {
    $diskon = 0.05;
} elseif ($tipeKamar == "superior" && $lamaMenginap > 4) {
    $diskon = 0.35;
} elseif ($tipeKamar == "premium" && $lamaMenginap > 4) {
    $diskon = 0.25;
}


$totalHarga = $hargaPerMalam * $lamaMenginap * (1 - $diskon);


$status = "checkin";



echo "==== Program Reservasi Hotel Sederhana ===\n <br />";
echo "Nama Pemesan: $namaPemesan\n <br />";
echo "Nomor Whatsapp: $nomorWhatsapp\n <br />";
echo "Alamat: $alamat\n <br />";
echo "Tipe Kamar: $tipeKamar\n <br />";
echo "Harga Per Malam: Rp. " . number_format($hargaPerMalam, 0, ",", ".") . "\n <br />";
echo "Lama Menginap: $lamaMenginap hari\n <br />";
echo "Diskon: " . ($diskon * 100) . "%\n <br />";
echo "Total Harga: Rp. " . number_format($totalHarga, 0, ",", ".") . "\n <br />";
echo "Status: ";

if ($status == "waiting") {
    echo "<span style='color : yellow;'>Waiting</span>";
} elseif ($status == "checkin") {
    echo "<span style='color : green;'>Checkin</span>";
} elseif ($status == "checkout") {
    echo "<span style='color : red;'>Checkout</span>";
}


?>