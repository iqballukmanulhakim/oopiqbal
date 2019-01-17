<?php

class Novel extends Produk implements InfoProduk {
	public $jmlHalman;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalman = 0) {

		parent::__construct( $judul, $penulis , $penerbit, $harga);

		$this->jmlHalman = $jmlHalman;

	}


	public function getInfo(){
		
		$al = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $al;

		

		}


	 public function getInfoProduk()  {
		
		$al = "Novel: " . $this->getInfo() . " - {$this->jmlHalman} Halaman.";
		return $al;
	}
}