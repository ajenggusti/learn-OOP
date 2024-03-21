<?php
abstract class buah{
    private $warna;

    abstract public function makan();

    public function setWarna($warna="warna"){
        $this->warna = $warna;
    }
    public function getWarna(){
        return $this->warna;
    }
}

class apel extends buah{

    public function makan(){
        return "buah apel {$this->getWarna()} dimakan sampai tengah";
    }
}

class nanas extends buah{
    public function makan(){
        return "dikupas, lalu dimakan";
    }
}
// makan buah warna .... 
$makanBuah1= new apel();
$makanBuah1->setWarna("merah");
echo $makanBuah1->makan();

