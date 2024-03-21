<?php
class produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $halaman,
           $slide;   
    public function setLabel()        {
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoLengkap(){
        // novel : daun jatuh tak pernah membenci angin | tereliye , digital publisher (Rp. 99.000) , 300 halaman
        // komik : serena | aera, digital webtoon, (Rp. 12.000), 20 slide gambar.
        $str = "{$this->judul} | {$this->setLabel()} (Rp {$this->harga}) -";
        if ($this->halaman>0) {
            return "Novel : ". $str . " {$this->halaman} halaman";
        }elseif($this->slide>0){
            return "Komik : ".$str."{$this->slide} Slide gambar ";
        }
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

class cetakInfoProduk{
    // ditambahkan produk di depan $produk adalah 
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->setLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produksi1 = new produk("Serena", "Aera", "Digital Webtoon", "12.000", 0, 20);
echo $produksi1->getInfoLengkap();
$produksi2 = new produk("Seni Hidup Minimalis", "frachie jay", "Japan Publish", "105.000", 350, 0);
echo "<br>".$produksi2->getInfoLengkap();