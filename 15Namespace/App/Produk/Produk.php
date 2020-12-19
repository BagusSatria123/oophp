<?php
abstract class Produk
{
    //pilihan 2
    protected $judul,
        $penulis,
        $penerbit,
        $diskon,
        $harga;
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

    abstract public function getInfo();
}
