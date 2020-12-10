<?php
//$this adalah instan yang bersangkutan
//private digunakan di class tertentu
//public bisa diluar class
//protected bisa di satu class serta turunannya
//method abstact tidak boleh ada implementasi
abstract class Produk6
{
    //pilihan 2
    private $judul,
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

    public function setJudul($judul)
    {
        // if (!is_string($judul)) {
        //     throw new Exception("judul harus string");
        // }
        $this->judul = $judul;
    }

    //celah untuk private
    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }
    //celah untuk private
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    public function getDiskon()
    {
        return $this->diskon;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    //celah untuk private
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public  function getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }

    abstract public function getInfoProduk();

    public function getInfo()
    {
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
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} halaman.";
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
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} jam.";
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
    public $daftarProduk = array();

    public function tambahProduk(Produk6 $produk)
    {
        $this->daftarProduk[] = $produk;
    }
    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}
//dibikin 0 agar mudah
//menyesuaikan constructor diatas
$produk3 = new Komik("Naruto", "mashahi kisi", "anjay", 10000, 100);
$produk4 = new Game("Narutoa", "mashahi kisia", "anjaya", 20000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk3);
$cetakProduk->tambahProduk($produk4);
echo $cetakProduk->cetak();
