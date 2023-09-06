<?php 

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

    // Menggunakan:
    public function __construct( $judul = "kosong", $penulis = "kosong", $penerbit = "kosong", $harga = "kosong") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Novel extends Produk {
    public $halaman;

    // Penggunaan Overriding ke-2
    public function __construct( $judul = "kosong", $penulis = "kosong", $penerbit = "kosong", $harga = "kosong", $halaman = "kosong" ) {

        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->halaman = $halaman;
    }

    public function getInfoProduk() {

        // contoh penggunaan Overriding
        $str = "Novel : " . parent::getInfoProduk() . " - {$this->halaman} Halaman.";

        return $str;
    }
}

class Game extends Produk {
    public $jam;

    // Penggunaan Overriding ke-2
    public function __construct( $judul = "kosong", $penulis = "kosong", $penerbit = "kosong", $harga = "kosong", $jam = "kosong" ) {
    
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->jam = $jam;
    
    }        

    public function getInfoProduk() {

        // contoh penggunaan Overriding
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->jam} Jam.";

        return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// Construcktor-nya
$produk1 = new Novel("Guru Aini", "Andrea Hirata", "Bentang Pustaka", 100000, 363);
$produk2 = new Game("Grounded", "Obsidian", "Obsidian Entertainment", 609000, 100);

// Novel : Guru Aini | Andrea Hirata, Bentang Pustaka (Rp. 100000) - 336 halaman
// Game : Grounded | Obsidian, Obsidian Entertainment (Rp. 609000) - 100 jam

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();