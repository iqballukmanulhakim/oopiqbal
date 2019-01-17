<?php 

class Produk {
	public $judul, 
	       $penulis,
	       $penerbit,
	       $harga,
	       $jmlHalman,
	       $waktuNonton;
	       

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalman= 0, $waktuNonton = 0) {
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jmlHalman = $jmlHalman;
			$this->waktuNonton = $waktuNonton;
			
	}


	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}


	public function getInfoProduk() {
		// Novel : Doraemon | Iqbal Lukmanul, COCONUT (Rp. 80000) - 100 Halaman.
		$al = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $al;

		

		}

}


class Novel extends Produk {
	public function getInfoProduk()  {
		$al = "Novel : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalman} Halaman.";
		return $al;
	}
}

class Film extends Produk {
	public function getInfoProduk() {
		$al = "Film : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuNonton} Jam.";
		return $al;
	}
}



class CetakInfoProduk {
	public function cetak( Produk $produk) {
		$al = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $al;
	}
}



$produk1 = new Novel("Doraemon", "Iqbal Lukmanul", "COCONUT", 90000, 100, 0);


$produk2 = new Film("Spongebob", "Iqbal Hakim", "COCONUT", 80000, 0, 2);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();