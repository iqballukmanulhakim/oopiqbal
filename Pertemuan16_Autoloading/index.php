<?php

require_once 'App/init.php';

$produk1 = new Novel("Doraemon", "Iqbal Lukmanul", "COCONUT", 90000, 100);


$produk2 = new Film("Spongebob", "Iqbal Hakim", "COCONUT", 80000, 2);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();
