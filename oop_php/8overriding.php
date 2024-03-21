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
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $halaman = 0, $slide=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->slide = $slide;
    }
}

// untuk child dari class, sifatnya mencari properti atau method yang ada didalam dirinya terlebih dahulu. ketika tidak meneukan, maka ia akan mencari di parentnya. inilah sifat inheritance(pewarisan)
class komik extends produk{
    public $slide;
    public function getInfoProduk(){
        // Cara memanggil parent apabila memiliki nama method yang sama yaitu dengan menambahkan parent::method(), inilah yang dinamakan overriding
        $str = "Komik: {$this->judul} |" . parent::setLabel(). " ~{$this->slide} Slide.";
        return $str;
    }
}

class novel extends produk{
    public $halaman;
    public function getInfoProduk(){
        $str = "Novel : {$this->judul} |" . parent::setLabel(). " -{$this->halaman} Halaman.";
        return $str;
    }
}
class cetakInfoProduk{
    // ditambahkan produk di depan $produk adalah hanya menerima dari class produk
    public function cetak(produk $produk){
        // Cara memanggil parent apabila memiliki nama method yang sama yaitu dengan menambahkan parent::method()
        $str = "{$produk->judul} | {$produk->setLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produksi1 = new komik("Serena", "Aera", "Digital Webtoon", "12.000", 0, 20);
echo $produksi1->getInfoProduk();
$produksi2 = new novel("Seni Hidup Minimalis", "frachie jay", "Japan Publish", "105.000", 350, 0);
echo "<br>".$produksi2->getInfoProduk();