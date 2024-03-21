<?php
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