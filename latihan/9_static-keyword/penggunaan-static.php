<?php 
class ContohStatic {
    //property 
    public static $angka = 1;

    //method
    public static function halo() {
        return "Halo " . self::$angka . " kali.";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();