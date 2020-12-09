<?php

class ContohStatic
{
    public static $angka = 1;

    public static function halo()
    {
        //self mengambil
        return "Halo " . self::$angka++ . " kali.";
    }
}

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

//Nilai static selalu tetap dan terus meskipun object di instansiasi berulang kali
$obj = new ContohStatic;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";
$obj2 = new ContohStatic;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
