<?php
class mobil{
    public $nama, $merk, $warna, $kecepatanMaksimal, $jmlPenumpang;

    public function tambahKecepatan(){
        return "kecepatan bertambah" ;
    }
}

// dibawah ini adalah contoh inheritence(pewarisan)
class mobilSport extends mobil{
    public $turbo = false;

    public function kecepatanTurbo(){
        $this->turbo = true;
        return "turbo dijalankan.";
    }
}

$mobil = new mobilSport();
echo $mobil->kecepatanTurbo();
echo "<br>";
echo $mobil->tambahKecepatan();