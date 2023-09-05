<?php 

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class Novel extends Produk {
    public $halaman;

    public function __construct( $judul = "kosong", $penulis = "kosong", $penerbit = "kosong", $harga = "kosong", $halaman = "kosong" ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
    }
}

class Game extends Produk{
    public $jam;

    public function __construct( $judul = "kosong", $penulis = "kosong", $penerbit = "kosong", $harga = "kosong", $jam = "kosong" ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jam = $jam;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }

    public function cetakNovel(Novel $produk) {
        $novel = "Novel : {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) - {$produk->halaman} halaman";
        return $novel;
    }

    public function cetakGame(Game $produk) {
        $game = "Game : {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) - {$produk->jam} jam";
        return $game;
    }
}

// Construcktor-nya
$produk1 = new Novel("Guru Aini", "Andrea Hirata", "Bentang Pustaka", 100000, 363);
$produk2 = new Game("Grounded", "Obsidian", "Obsidian Entertainment", 609000, 100);

$infoProduk1 = new CetakInfoProduk();
$infoProduk2 = new CetakInfoProduk();


echo $infoProduk1->cetakNovel($produk1);
echo '<br>';
echo $infoProduk2->cetakGame($produk2);

// Novel : Guru Aini | Andrea Hirata, Bentang Pustaka (Rp. 100000) - 336 halaman
// Game : Grounded | Obsidian, Obsidian Entertainment (Rp. 609000) - 100 jam
