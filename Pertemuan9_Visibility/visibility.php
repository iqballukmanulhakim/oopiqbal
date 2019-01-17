<?php 

class Produk {
	public $judul, 
	       $penulis,
	       $penerbit;

	       protected $diskon = 0;


	       private $harga;
	       
	       
	       

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			
			
	}




	public function getHarga() {
		return $this->harga - ( $this->harga * $this->diskon / 100);
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
	public $jmlHalman;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalman = 0) {

		parent::__construct( $judul, $penulis , $penerbit, $harga);

		$this->jmlHalman = $jmlHalman;

	}

	public function getInfoProduk()  {
		
		$al = "Novel: " . parent::getInfoProduk() . " - {$this->jmlHalman} Halaman.";
		return $al;
	}
}

class Film extends Produk {
	public $waktuNonton;

		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuNonton = 0 ) {

		parent::__construct( $judul, $penulis , $penerbit, $harga);

		$this->waktuNonton = $waktuNonton;

	}

	public function setDiskon( $diskon ) {
		$this->diskon = $diskon;
	}


public function getInfoProduk()  {
		
		$al = "Film: " . parent::getInfoProduk() . " ~ {$this->waktuNonton} Jam.";
		return $al;
	}
}



class CetakInfoProduk {
	public function cetak( Produk $produk) {
		$al = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $al;
	}
}



$produk1 = new Novel("Doraemon", "Iqbal Lukmanul", "COCONUT", 90000, 100);


$produk2 = new Film("Spongebob", "Iqbal hakim", "COCONUT", 80000, 2);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(30);
echo $produk2->getHarga();