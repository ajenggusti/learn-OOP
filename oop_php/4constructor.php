<?php
class produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga;   
    
    // construct ini otomatis berjalan setiap membuat instance alias new produk()
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function setLabel()        {
        return " $this->penulis, $this->penerbit";
    }
}

$produksi1 = new produk("serena", "aera", "digital webtoon", "12.000");
$produksi2 = new produk("ketika daun tak pernah membenci angin", "tereliye", "digital publisher", "99.000");
echo "Komik : ".$produksi1->setLabel();
echo "<br>";
echo "Novel : ".$produksi2->setLabel();




