<?php
//$this adalah instan yang bersangkutan
//private digunakan di class tertentu
//public bisa diluar class
//protected bisa di satu class serta turunannya
class Produk6
{
    //pilihan 2
    public $judul,
        $penulis,
        $penerbit,
        $diskon;
    private $harga;
    //tipe untuk pilih komik atau game
    public  function sayHello()
    {
        return "Hello word";
    }

    // ini menjadi general
    //perluasannya di child2nya
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    //untuk private
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public  function getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }

    public function getInfoProduk()
    {
        //Komik : Naruto | Mashashi kishimoto, Shonen Jump (Rp. 3000) -100 halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

//Inheritance tidak punya constructor
class Komik extends Produk6
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        //mengambil parent product
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk()
    {
        //sudah menandakan bahwa parent:: adalah punya method getInfoProduk
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk6
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        //mengambil parent product
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} jam.";
        return $str;
    }

    //untuk protected
    // public function getHarga()
    // {
    //     return $this->harga;
    // }
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
$produk3 = new Komik("Naruto", "mashahi kisi", "anjay", 10000, 100);
$produk4 = new Game("Narutoa", "mashahi kisia", "anjaya", 20000, 50);

echo $produk3->getInfoProduk();
echo "<br>";
echo $produk4->getInfoProduk();
echo "<hr>";
//visibility protected
$produk4->setDiskon(20);
echo $produk4->getHarga();
