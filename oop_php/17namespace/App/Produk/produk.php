<?php
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
