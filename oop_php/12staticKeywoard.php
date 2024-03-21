<?php
// static keyword adalah, mengakses property dan method dalam konteks class tanpa membuat instace/object.
class contohStatic{
    public static $angka = 1;
    public static function halo (){
        return "Hello.".self::$angka++;
    }
}

echo contohStatic::$angka;
echo "<hr>";
echo contohStatic::halo();
echo contohStatic::halo();