<?php

class Film extends Produk implements InfoProduk {
	public $waktuNonton;

		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuNonton = 0 ) {

		parent::__construct( $judul, $penulis , $penerbit, $harga);

		$this->waktuNonton = $waktuNonton;

	}

	
	public function getInfo(){
		
		$al = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $al;

		

		}


public function getInfoProduk()  {
		
		$al = "Film: " . $this->getInfo() . " ~ {$this->waktuNonton} Jam.";
		return $al;
	}
}