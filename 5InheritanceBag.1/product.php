<?php

class Produk3
{
    //pilihan 2
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;
    //tipe untuk pilih komik atau game

    public  function sayHello()
    {
        return "Hello word";
    }

    // plihan 2
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public  function getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }

    public function getInfoLengkap()
    {
        //Komik : Naruto | Mashashi kishimoto, Shonen Jump (Rp. 3000) -100 halaman.
        $str = "{$this->tipe} : {$this->getLabel()} (Rp. {$this->harga})";

        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }
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
$produk3 = new Produk3("Naruto", "mashahi kisi", "anjay", 10000, 100, 0, "Komik");
$produk4 = new Produk3("Narutoa", "mashahi kisia", "anjaya", 20000, 0, 50, "Game");

echo $produk3->getInfoLengkap();
echo "<br>";
echo $produk4->getInfoLengkap();
