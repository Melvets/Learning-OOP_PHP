<?php 

class Produk {
    private $judul, 
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;

    // Menggunakan:
    public function __construct( $judul = "kosong", $penulis = "kosong", $penerbit = "kosong", $harga = "kosong") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Setter
    public function setJudul ( $judul ) {
        // Memungkinkan untuk membuat validasi
        // if ( !is_string($judul) ) {
        //     throw new Exception("Judul harus string");
        // }
        $this->judul = $judul;
    }
    
    // Getter
    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis ( $penulis ) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit ( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setHarga ( $harga ) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
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

echo "<hr>";

// Protected
$produk2->setDiskon(50);
echo $produk2->getHarga();

echo "<hr>";

// setter dan getter
$produk1->setHarga(20000);
echo $produk1->getJudul();
echo $produk1->getPenulis();
echo $produk1->getPenerbit();
echo $produk1->getHarga();



