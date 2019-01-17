<?php 

// class ContohStatic {
// 	public static $angka = 1;

// 	public static function halo() {
// 		return " Hallo Guys " . self::$angka++ ." kali.";
// 	}
// }


// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();


class Baru {
	public static $angka = 1;

	public function halo() {
		return "Hai " . self::$angka++ . "kali. <br>";
	}
}

$obj = new Baru;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Baru;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();