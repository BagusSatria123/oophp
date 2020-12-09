//indenfier menyimpan nilai
//nilai tidak bisa berubah-ubah
//define tidak bisa disimpan di dalam kelas
//const bisa disimpan di dalam kelas

<?php
// define('NAMA','SANDHIKA');
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;

// class Coba
// {
//     const NAMA = 'Sandhika';
// }
// echo Coba::NAMA;

//MAGIC Constanta
// echo __LINE__;
// echo __FILE__;

// function coba{
//     return __FUNCTION__;

// }
// echo coba();

class Coba
{
    public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;
?>