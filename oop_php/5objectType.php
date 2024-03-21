<?php
class produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga;   
    public function setLabel()        {
        return "$this->penulis, $this->penerbit";
    }
    // construct ini otomatis berjalan setiap membuat instance alias new produk()
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
}

class cetakInfoProduk{
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->setLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produksi1 = new produk("serena", "aera", "digital webtoon", "12.000");
$produksi2 = new produk("ketika daun tak pernah membenci angin", "tereliye", "digital publisher", "99.000");

$produk = new cetakInfoProduk();
echo $produk->cetak($produksi1);
echo "<br>";

// nah dibawah ini merupakan contoh error apabila tidak menggunakan instance dari produk
// untuk menyelesaikan problemnya ada di file 7inheritenche-problem
// echo $produk->cetak("ajhsg");

