<?php 
class contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

// hasilnya jika tanpa static:
// Halo 1 kali
// Halo 2 kali
// Halo 3 kali

// Halo 1 kali
// Halo 2 kali
// Halo 3 kali

// Jika property $angka diubah menjadi static maka hasilnya
// Halo 1 kali
// Halo 2 kali
// Halo 3 kali

// Halo 4 kali
// Halo 5 kali
// Halo 6 kali