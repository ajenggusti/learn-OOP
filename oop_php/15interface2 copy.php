<?php
// abstract class adalah class yang tidak bisa di instansi (tidak bisa membuat objek).
// berperan sebagai kerangka dasar untuk turunannya
// 

interface getInfo{
    public function getInfoProduk() ;
}
abstract class produk{
    public $judul,
           $penulis,
           $penerbit,
           $diskon,
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
    
    public function getDiskon(){
        return $this->diskon;
    }
    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon /100);
    }
    public function setHarga($harga){
        $this->harga = $harga;
    }
    public function getJudul(){
        return $this->judul;
    }
    public function setJudul($judul){
        if(!is_string($judul)){
            throw new Exception ("judul harus string");
        }
        $this->judul=$judul;
    }
    public function getPenulis(){
        return $this->penulis;
    }
    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }
    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }
    // dibawah ini adalah kerangka yang harus ada di setiap instance dari produk. karena dia abstract.

    abstract public function getInfo();
}

// untuk child dari class, sifatnya mencari properti atau method yang ada didalam dirinya terlebih dahulu. ketika tidak meneukan, maka ia akan mencari di parentnya. inilah sifat inheritance(pewarisan)
class komik extends produk implements getInfo{
    public $slide;
    public function __construct($judul, $penulis, $penerbit, $harga, $slide=0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->slide = $slide;
    }
    public function getInfo(){
        $str = "{$this->judul} |" . $this->setLabel(). " (Rp {$this->harga})";
        return $str;
    }

    // jadi dibawah ini ada kerangka abstract yang harus ada disetiap instance dari produk. 
    public function getInfoProduk(){
        // Cara memanggil parent apabila memiliki nama method yang sama yaitu dengan menambahkan parent::method()
        $str = "Komik : " . $this->getInfo().  "  ~{$this->slide} Slide.";
        return $str;
    }
}
class novel extends produk implements getInfo{
    public $halaman,
            $diskon;

    public function __construct($judul , $penulis , $penerbit, $harga, $halaman=0){
        parent::__construct($judul , $penulis , $penerbit, $harga);
        $this->halaman = $halaman;
    }
    public function getInfo(){
        $str = "{$this->judul} |" . $this->setLabel(). " (Rp {$this->harga})";
        return $str;
    }
    public function getInfoProduk(){
        $str = "Novel : " . $this->getInfo(). "  -{$this->halaman} Halaman.";
        return $str;
    }
    
}


class cetakInfoProduk{
    public $daftarProduk=array();

    public function tambahProduk(produk $produk){
        $this->daftarProduk[]= $produk;
    }
    public function getTambahProduk(){
        return $this->daftarProduk;
    }
    public function cetak(){
        $str = "DAFTAR PRODUK <br>";
        // $p adlaah objek produk (instance)
        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

$produksi1 = new komik("Serena", "Aera", "Digital Webtoon", "12000",90);
$produksi2 = new novel("Seni Hidup Minimalis", "frachie jay", "Japan Publish", "105000", 350);
echo $produksi1->getInfoProduk();
echo "<br>";
echo $produksi2->getInfoProduk();

// $cetakProduk = new cetakInfoProduk();
// $cetakProduk->tambahProduk($produksi1);
// $cetakProduk->tambahProduk($produksi2);
// echo  ($cetakProduk->cetak());

