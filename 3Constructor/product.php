<?php

class Produk2
{
    //property class
    //pilihan 1
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    //pilihan 2
    // public $judul,
    //     $penulis,
    //     $penerbit,
    //     $harga;

    public  function sayHello()
    {
        return "Hello word";
    }
    //didalam kurung adalah variabel lokal
    //pilihan 1
    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        // echo "Hello word";
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //plihan 2
    // public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga="harga")
    // {
    // }

    public  function getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }
}

$produk3 = new Produk2("Naruto", "mashahi kisi", "anjay", 10000);

$produk4 = new Produk2("Narutoa", "mashahi kisia", "anjaya", 20000);

//pilihan 2
//sisanya default soale gak ada inisiasi
// $produk5 = new Produk("Narutoa");


echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Komik : " . $produk4->getLabel();
echo "<br>";
//pilihan2
// var_dump($produk5);
