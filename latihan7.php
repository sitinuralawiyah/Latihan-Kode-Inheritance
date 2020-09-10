<?php
class Angkot{
	public $warna, $kecepatanMaksimal, $jumlahPenumpang;

	public function tambahKecepatan(){
		return "Kecepatan Bertambah";
	}
}

class AngkotAC extends Angkot{
	public $ac=false;

	public function nyalakanAC(){
		$this->ac=true;
		return "AC Dinyalakan";
	}
}

$angkotNya = new AngkotAC();
echo $angkotNya->tambahKecepatan();
echo "<br>";
echo $angkotNya->nyalakanAC();
?>