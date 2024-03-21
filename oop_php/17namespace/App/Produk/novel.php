<?php
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