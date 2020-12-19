<?php
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';


spl_autoload_register(function ($class) {
    //membuka file di dalam folder dengan script dibawah ini 
    //biar lebih lengkap
    //App\Produk\User = ["App","Produk","User"]
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Produk/' . $class . '.php';
    // require_once 'Produk/' . $class . '.php';
});


spl_autoload_register(function ($class) {
    //membuka file di dalam folder dengan script dibawah ini 
    $class = explode('\\', $class);
    $class = end($class);
    //biar lebih lengkap
    require_once __DIR__ . '/Service/' . $class . '.php';
    // require_once 'Produk/' . $class . '.php';
});
