<?php

// require_once 'App/init.php';

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Novel.php';
// require_once 'Produk/Film.php';
// require_once 'Produk/CetakInfoProduk.php';

spl_autoload_register(function( $class ){

	require_once __DIR__ . '/Produk/' . $class . '.php';

});