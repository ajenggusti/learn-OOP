<?php
class produk{
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "harga";   
    public function setLabel()        {
        return "$this->penulis, $this->penerbit";
    }
}


// tampilkan komik dan buku. untuk setiap judul, penerbit, penulis, dan harga
$produksi = new produk();
$produksi->judul = "Serena";
$produksi->penerbit = "putri ariani";
$produksi->penulis = "gitra bagas";
$produksi->harga = 25000;
echo "komik : ", $produksi->setLabel();
echo "<br>";
$produksi1 = new produk();
$produksi1->judul = "seni hidup minimalis";
$produksi1-> penerbit = "fujikowa";
$produksi1->penulis ="francine jay";
$produksi1-> harga = 99000;
echo "buku : ", $produksi1->setLabel();




