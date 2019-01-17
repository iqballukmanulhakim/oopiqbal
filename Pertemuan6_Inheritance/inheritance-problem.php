<?php 

class Produk {
	public $judul, 
	       $penulis,
	       $penerbit,
	       $harga,
	       $jmlHalman,
	       $waktuNonton,
	       $tipe;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalman= 0, $waktuNonton = 0, $tipe) {
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jmlHalman = $jmlHalman;
			$this->waktuNonton = $waktuNonton;
			$this->tipe = $tipe;
	}


	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}


	public function getInfoLengkap() {
		// Novel : Doraemon | Iqbal Lukmanul, COCONUT (Rp. 80000) - 100 Halaman.
		$al = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if( $this->tipe == "Novel") {
			$al .= " - {$this->jmlHalman} Halaman.";
		}else if( $this->tipe == "Film")  {
			$al .= "~ {$this->waktuNonton} Jam.";
		}

		return $al;

		}

}


class CetakInfoProduk {
	public function cetak( Produk $produk) {
		$al = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $al;
	}
}



$produk1 = new Produk("Doraemon", "Iqbal Lukmanul", "COCONUT", 90000, 100, 0, "Novel");


$produk2 = new Produk("Spongebob", "Iqbal Hakim", "COCONUT", 80000, 0, 2, "Film");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();