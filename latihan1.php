<?php
$uang_anak = 16000;
$nasi_goreng = 10000;

if ($uang_anak >= $nasi_goreng){
    echo "Uang Anda Cukup Untuk Membeli Nasi Goreng <br>";
    $uang_kembalian = $uang_anak - $nasi_goreng;
    echo "$uang_kembalian uang kembalian";
} else {
    echo "Maaf Uang Anda Tidak Cukup Untuk Membeli Nasi Goreng <br>";
    $uang_kurang = $uang_anak - $nasi_goreng;
    echo "$uang_kurang uang yang kurang";
} 