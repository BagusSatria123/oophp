<?php

class Produk3
{
    //property class
    //pilihan 1
    // public $judul = "judul",
    //     $penulis = "penulis",
    //     $penerbit = "penerbit",
    //     $harga = 0;

    //pilihan 2
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public  function sayHello()
    {
        return "Hello word";
    }

    // plihan 2
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public  function getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }
}
class CetakInfoProduk
{
    //klo ingin fokus 1 class pake ini 
    // public function cetak(Produk $produk)
    //klo mau fokus semua nya pakai ini
    public function cetak($produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}


$produk3 = new Produk3("Naruto", "mashahi kisi", "anjay", 10000);
$produk4 = new Produk3("Narutoa", "mashahi kisia", "anjaya", 20000);



echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Komik : " . $produk4->getLabel();
echo "<br>";

//objectType
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk3);
