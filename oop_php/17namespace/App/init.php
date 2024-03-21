<?php
// require_once 'Produk/getInfo.php';
// require_once 'Produk/produk.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/novel.php';
// require_once 'Produk/cetakInfoProduk.php';

// diperlukan namespace untuk membedakan kedua hal dibawah ini. 
// require_once 'Produk/User.php';
// require_once 'Service/User.php';

// apabila mengerjakan projek yang kompleks, tentunya class yang dimiliki akan semakin banyak. Akan sangat merepotkan jika menulis satu per satu. Untuk itu memanfaatkan library spl_autoload_register()
// apabila ada class baru yang dibuat, tidak perlu repot membuat require_once lagi.

spl_autoload_register(function ($class){
    // App\Service\User = ["App","Service","User"] lalu diambil yang paling akhir
    $class = explode('\\',$class);
    $class = end($class);
    require_once 'Produk/'.$class.'.php';
});

spl_autoload_register(function ($class){
    // App\Service\User = ["App","Service","User"] lalu diambil yang paling akhir
    $class = explode('\\',$class);
    $class = end($class);
    require_once 'Service/'.$class.'.php';
});
