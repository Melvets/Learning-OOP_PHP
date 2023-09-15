<?php

require_once 'App/init.php';

$produk1 = new Novel("Guru Aini", "Andrea Hirata", "Bentang Pustaka", 100000, 363);
$produk2 = new Game("Grounded", "Obsidian", "Obsidian Entertainment", 609000, 100);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );

echo $cetakProduk->cetak();