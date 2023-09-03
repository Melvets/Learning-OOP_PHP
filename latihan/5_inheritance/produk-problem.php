<?php 

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

    // Menggunakan:
    public function __construct( $judul = "kosong", $penulis = "kosong", $penerbit = "kosong", $harga = "kosong" ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// Construcktor-nya
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Guru Aini", "Andrea Hirata", "Bentang Pustaka", 100000);

// Komik : Masashi Kishimoto, Shonen Jump
// Novel : Andrea Hirata, Bentang Pustaka
// Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000)
// Guru Aini | Andrea Hirata, Bentang Pustaka (Rp. 100000)
