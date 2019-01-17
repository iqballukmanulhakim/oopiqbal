<?php

class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk( Produk $produk ) {
		$this->daftarProduk[] = $produk;
	}

	public function cetak() {
		$al = "DAFTAR PRODUK : <br>";
		
		foreach( $this->daftarProduk as $p ) {
			$al .= "- {$p->getInfoProduk()} <br>";
		}


		return $al;

	}
}