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
// Construcktor-nya
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Guru Aini", "Andrea Hirata", "Bentang Pustaka", 100000);
$produk3 = new Produk();

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Novel : " . $produk2->getLabel();
echo "<br>";
echo "Novel : " . $produk3->getLabel();
