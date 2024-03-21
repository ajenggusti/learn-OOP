<?php
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