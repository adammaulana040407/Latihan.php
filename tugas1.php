<?php
// Variabel
echo "Hallo XI RPL 4";
echo "<br>";
echo "Nama: Adam Maulana Abdullah";
echo "<br>";
echo "Jk: Laki-laki";
echo "<br>";
echo "Kelas: XI RPL 4";
echo "<br>";
echo "Alamat: D/20, Jl. Danau Tambingan, Sawojajar, Malang";


echo "<br>";
$nama="Aadam Maulana Abdullah ";
$uangSaku=10000;

echo $nama;
echo "<br>";
echo "Uang Saku: $uangSaku";
echo "<br>";


// Menghitung Keliling Persegi Panjang (OPERATOR)
$a = 2;
$p = 50;
$l = 25;
$hasil= $a * ($p + $l);

echo $hasil;
echo "<br>";

// Kondisi 
$harga =100000;
if($harga < 75000){
    echo "Saya akan roti";
} else if ($harga <= 100000) {
    echo "Saya akan menawarnya";
} else {
    echo "Uang saya kurang";
}
echo "<br>";


// FUNCTION
function AkuHebat(){
    echo "SEMANGAT BELAJAR";
}
AkuHebat();
?>