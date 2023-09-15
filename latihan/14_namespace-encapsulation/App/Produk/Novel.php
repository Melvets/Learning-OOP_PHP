<?php 
class Novel extends Produk implements InfoProduk{
    public $halaman;

    // Penggunaan Overriding ke-2
    public function __construct( $judul = "kosong", $penulis = "kosong", $penerbit = "kosong", $harga = "kosong", $halaman = "kosong" ) {

        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->halaman = $halaman;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk() {

        // contoh penggunaan Overriding
        $str = "Novel : " . $this->getInfo() . " - {$this->halaman} Halaman.";

        return $str;
    }
}