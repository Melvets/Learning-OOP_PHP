<?php 

class Produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga,
           $halaman,
           $jam,
           $tipe;

    // Menggunakan:
    public function __construct( $judul = "kosong", $penulis = "kosong", $penerbit = "kosong", $harga = "kosong", $halaman = "kosong", $jam = "kosong", $tipe = "kosong") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->jam = $jam;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe == "Novel"){
            $str .= " - {$this->halaman} Halaman.";
        } else if ($this->tipe == "Game"){
            $str .= " - {$this->jam} Jam.";
        }

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
$produk1 = new Produk("Guru Aini", "Andrea Hirata", "Bentang Pustaka", 100000, 363, 0, "Novel");
$produk2 = new Produk("Grounded", "Obsidian", "Obsidian Entertainment", 609000, 0, 100, "Game");

// Novel : Guru Aini | Andrea Hirata, Bentang Pustaka (Rp. 100000) - 336 halaman
// Game : Grounded | Obsidian, Obsidian Entertainment (Rp. 609000) - 100 jam

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();