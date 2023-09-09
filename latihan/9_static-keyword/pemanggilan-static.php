<?php 
class ContohStatic {
    //property 
    public static $angka = 1;

    //method
    public static function halo() {
        return "Halo.";
    }
}

//pemanggilan property
echo ContohStatic::$angka;

//pemanggilan method
echo ContohStatic::halo();