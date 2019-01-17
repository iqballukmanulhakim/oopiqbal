<?php 

// define('NAMA', 'Iqbal Lukmanul Hakim');

// echo NAMA;

// echo "<hr>";

// const UMUR = 17;

// echo UMUR;


// class Coba {
// 	const NAMA = 'Iqbaal';
// }

// echo Coba::NAMA;


// // echo __FILE__;

// function Iqbal() {
// 	return __FUNCTION__;
// }

// echo Iqbal();


class Rpl {
	public $kelas = __CLASS__;
}

$a = new Rpl;
echo $a->kelas;