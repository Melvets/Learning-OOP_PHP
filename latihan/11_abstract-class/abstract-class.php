<?php 

abstract class Produk {
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

    abstract public function getInfoProduk();
    
    public function getInfo() {
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
        $str = "Novel : " . $this->getInfo() . " - {$this->halaman} Halaman.";

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
        $str = "Game : " . $this->getInfo() . " ~ {$this->jam} Jam.";

        return $str;
    }
}

class CetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak(  ) {
        $str = "DAFTAR PRODUK : <br>";

        foreach ( $this->daftarProduk as $produk) {
            $str .= "- {$produk->getInfoProduk()} <br>";
        }

        return $str;
    }
}

// Construcktor-nya
$produk1 = new Novel("Guru Aini", "Andrea Hirata", "Bentang Pustaka", 100000, 363);
$produk2 = new Game("Grounded", "Obsidian", "Obsidian Entertainment", 609000, 100);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );

echo $cetakProduk->cetak();
