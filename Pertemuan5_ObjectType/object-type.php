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


class CetakInfoProduk {
	public function cetak( Produk $produk) {
		$al = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $al;
	}
}



$produk1 = new Produk("Doraemon", "Iqbal lukmanul", "COCONUT", 90000);


$produk2 = new Produk("Spongebob", "Iqbal Hakim", "COCONUT", 80000);

echo "Novel : ". $produk1->getLabel();
echo "<br>";
echo "<hr>";
echo "Buku : ".$produk2->getLabel();
echo "<br>";
echo "<hr>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk2);