<?php 
class Game extends Produk implements InfoProduk{
    public $jam;

    // Penggunaan Overriding ke-2
    public function __construct( $judul = "kosong", $penulis = "kosong", $penerbit = "kosong", $harga = "kosong", $jam = "kosong" ) {
    
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->jam = $jam;
    
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk() {

        // contoh penggunaan Overriding
        $str = "Game : " . $this->getInfo() . " ~ {$this->jam} Jam.";

        return $str;
    }
}