<?php

require_once 'App/init.php';

$produk3 = new Komik("Naruto", "mashahi kisi", "anjay", 10000, 100);
$produk4 = new Game("Narutoa", "mashahi kisia", "anjaya", 20000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk3);
$cetakProduk->tambahProduk($produk4);
echo $cetakProduk->cetak();
