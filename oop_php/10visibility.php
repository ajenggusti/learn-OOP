<?php
// pengertian visibility
// konsep yang digunakan untuk mengatur akses terhadap sebuah property atau method pada sebuah kelas atau objek.
// ada 3 keyword dalam visibility yang bisa digunakan : public, protected, private.
// public, bisa diakses diluar class A.K.A. bisa digunakan dimana aja.
// protected, hanya bisa digunakan di dalam class beserta turunannya
// private, hanya bisa digunakan di dalam class tertentu saja.

class produk{
    public $judul,
           $penulis,
           $penerbit;
    protected $diskon =0;  
    private $harga;

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
    public function getInfoProduk(){
        $str = "{$this->judul} |" . $this->setLabel(). " (Rp {$this->harga})";
        return $str;
    }
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon /100);
    }
}

// untuk child dari class, sifatnya mencari properti atau method yang ada didalam dirinya terlebih dahulu. ketika tidak meneukan, maka ia akan mencari di parentnya. inilah sifat inheritance(pewarisan)
class komik extends produk{
    public $slide;
    public function __construct($judul, $penulis, $penerbit, $harga, $slide=0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->slide = $slide;
    }
    public function getInfoProduk(){
        // Cara memanggil parent apabila memiliki nama method yang sama yaitu dengan menambahkan parent::method()
        $str = "Komik : " . parent::getInfoProduk().  "  ~{$this->slide} Slide.";
        return $str;
    }
}
class novel extends produk{
    public $halaman,
            $diskon;

    public function __construct($judul , $penulis , $penerbit, $harga, $halaman=0){
        parent::__construct($judul , $penulis , $penerbit, $harga);
        $this->halaman = $halaman;
    }
    public function getInfoProduk(){
        $str = "Novel : " . parent::getInfoProduk(). "  -{$this->halaman} Halaman.";
        return $str;
    }
    public function setDiskon($diskon=0){
        $this->diskon=$diskon;
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

$produksi1 = new komik("Serena", "Aera", "Digital Webtoon", "12000",90);
echo $produksi1->getInfoProduk();
$produksi2 = new novel("Seni Hidup Minimalis", "frachie jay", "Japan Publish", "105000", 350, 0);
echo "<br>".$produksi2->getInfoProduk();
echo "<hr>";



// echo $produksi2->harga;
$produksi2->setDiskon(50);
echo $produksi2->getHarga();
