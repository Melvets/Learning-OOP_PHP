<?php 

class Produk {
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "harga";
    
    public function sayHello() {
        return "Hello World";
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Guru Aini";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Kamu Tidak Sendiri";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();
// echo "<br>";
// echo $produk3->getLabel();

// echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Guru Aini";
$produk4->penulis = "Andrea Hirata";
$produk4->penerbit = "Bentang Pustaka";
$produk4->harga = 100000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Novel : " . $produk4->getLabel();
