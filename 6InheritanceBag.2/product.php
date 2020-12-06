<?php

class Produk4
{
    //pilihan 2
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;
    //tipe untuk pilih komik atau game
    public  function sayHello()
    {
        return "Hello word";
    }

    // plihan 2
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public  function getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }

    public function getInfoProduk()
    {
        //Komik : Naruto | Mashashi kishimoto, Shonen Jump (Rp. 3000) -100 halaman.
        $str = "{$this->judul} : {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

//Inheritance tidak punya constructor
class Komik extends Produk4
{
    public function getInfoKomik()
    {
        $str = "Komik : {$this->getInfoProduk()} - {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk4
{
    public function getInfoGame()
    {
        $str = "Game : {$this->getInfoProduk()} - {$this->waktuMain} jam.";
        return $str;
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
//dibikin 0 agar mudah
//menyesuaikan constructor diatas
$produk3 = new Komik("Naruto", "mashahi kisi", "anjay", 10000, 100, 0);
$produk4 = new Game("Narutoa", "mashahi kisia", "anjaya", 20000, 0, 50);

echo $produk3->getInfoKomik();
echo "<br>";
echo $produk4->getInfoGame();
