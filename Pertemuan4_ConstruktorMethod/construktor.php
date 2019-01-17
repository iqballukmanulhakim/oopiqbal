<?php 

class Produk {
	public $judul, 
	       $penulis,
	       $penerbit,
	       $harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0") {
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
	}


	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

}



$produk1 = new Produk("Doraemon", "Iqbal Lukmanul", "COCONUT", 90000);


$produk2 = new Produk("Spongebob", "Iqbal Hakim", "COCONUT", 80000);
$produk3 = new Produk("Dilan 1990");

echo "Novel : ". $produk1->getLabel();
echo "<br>";
echo "<hr>";
echo "Buku : ".$produk2->getLabel();
var_dump($produk3);