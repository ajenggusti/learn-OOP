<?php
// require_once 'Produk/getInfo.php';
// require_once 'Produk/produk.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/novel.php';
// require_once 'Produk/cetakInfoProduk.php';

// apabila mengerjakan projek yang kompleks, tentunya class yang dimiliki akan semakin banyak. Akan sangat merepotkan jika menulis satu per satu. Untuk itu memanfaatkan library spl_autoload_register()
// apabila ada class baru yang dibuat, tidak perlu repot membuat require_once lagi.

spl_autoload_register(function ($class){
    require_once 'Produk/'.$class.'.php';
});