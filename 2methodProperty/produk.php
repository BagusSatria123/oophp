<?php

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public  function sayHello()
    {
        return "Hello word";
    }

    public  function getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }
}

// $produk1 = new Produk();
//ditimpa
// $produ1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Naruto";
$produk3->penerbit = "Naruto";
$produk3->harga = 3000;
// echo "komik : $produk3->penulis,$produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();

$produk4 = new Produk();
$produk4->judul = "Agunf";
$produk4->penulis = "Agunf";
$produk4->penerbit = "Agunf";
$produk4->harga = 3000;
echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Komik : " . $produk4->getLabel();
