<?php 

class Produk {
	public $judul = "judul",
	       $penulis = "penulis",
	       $penerbit = "penerbit",
	       $harga = "0";


	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

}


// $produk1 = new Produk();
// $produk1->judul = "Spongebob";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Star Wars";
// $produk2->tambahProperty = "Iqbal";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Doraemon";
$produk3->penulis ="Iqbal lukmanul hakim";
$produk3->penerbit = "COCONUT";
$produk3->harga = 90000;

$produk4 = new Produk();
$produk4->judul = "Spongebob";
$produk4->penulis ="Iqbal Hakim";
$produk4->penerbit = "COCONUT";
$produk4->harga = 80000;

echo "Novel : ". $produk3->getLabel();
echo "<br>";
echo "<hr>";
echo "Buku : ".$produk4->getLabel();