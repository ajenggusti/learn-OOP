<?php
// interface merupakan class abstrak yang sama sekali tidak memiliki implementasi.
// jadi jika kita memiliki class abstrak, at least harus punya 1 method yang abstract. Yang mana method ini hanya ditulis definisinya saja. tidak ada isinya. karena isi implementasinya nanti akan didefinisikan sendiri di class turunannya nya.
// class yang murni, artinya hanya sebagai interfrace saja
// tidak boleh memiliki property
// semua method harus di visibilitykan public
// boleh menggunakan __construct

interface buah{
    public function makan();
    public function setWarna($warna);
}

interface benda{
    public function setUkuran($ukuran);
}

class apel implements buah{
    protected $warna;
    public function setWarna($warna = "warna"){
        $this->warna = $warna;
    }
    public function makan(){
        return "dikupas kulit {$this->warna} nya, lalu dimakan hingga tengah.";
    }
}

class nanas implements buah{
    protected $warna;
    public function setWarna($warna){
        $this->warna = $warna;
    }
    public function makan(){
        return "dikupas kulit {$this->warna} nya, lalu di makan semua.";
    }
}

// jika ingin menggunakan 2 interface, maka penulisanya seperti dibawah ini. akan tetapi harus menanggung resiko nambah method nya juga hehe.
class durian implements buah, benda{
    protected $ukuran, 
            $warna;
    public function setUkuran($ukuran){
        $this->ukuran = $ukuran;
    }
    public function setWarna($warna){
        $this->warna = $warna;
    }
    public function makan(){
        return "makan buah durian, berwarna {$this->warna} dan berukuran {$this->ukuran}. Enak sekali";
    }

}

// $makan1=new apel();
// $makan1->setWarna("merah");
// echo $makan1->makan();
// echo "<br>";
// $makan2=new nanas();
// $makan2->setWarna("kuning");
// echo $makan2->makan();


$makan3 = new durian();
$makan3->setUkuran("jumbo");
$makan3->setWarna("hijau");
echo $makan3->makan();