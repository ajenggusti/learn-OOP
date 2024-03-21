<?php
// penulisan harus urut sesuai urutan class yang digunakan. soalnya tadi aku nyoba acak urutanya, jadinya error
// supaya tidak bertumpuk2 codenya, maka sebaiknya dipisahkan. require_once dipindahkan ke file init.php
// require_once 'App/Produk/getInfo.php';
// require_once 'App/Produk/produk.php';
// require_once 'App/Produk/komik.php';
// require_once 'App/Produk/novel.php';
// require_once 'App/Produk/cetakInfoProduk.php';

// untuk memanggil autoload yang disimpan di file init.php
require_once 'App/init.php';

$produksi1 = new komik("Serena", "Aera", "Digital Webtoon", "12000",90);
$produksi2 = new novel("Seni Hidup Minimalis", "frachie jay", "Japan Publish", "105000", 350);
echo $produksi1->getInfoProduk();
echo "<br>";
echo $produksi2->getInfoProduk();