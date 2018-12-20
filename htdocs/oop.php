<?php
	class Mobil {
		protected $jumlahRoda;
		protected $jumlahKursi;
		
		public function setJumlahRoda($jumlahRoda){
			$this->jumlahRoda = $jumlahRoda;	
		}
		
		public function setJumlahKursi($jumlahKursi){
			$this->jumlahKursi = $jumlahKursi;
		}
		
		public function cetak(){
			echo "<br/>Mobil punya ".$this->jumlahRoda." roda dan ".$this->jumlahKursi." kursi.";
		}
	}
	
	class Bemo extends Mobil{
		public function cetak(){
			echo "<br/>Bemo punya ".$this->jumlahRoda." roda dan ".$this->jumlahKursi." kursi.";
		}
	}
	
	$sedan = new Mobil();
	$sedan->setJumlahRoda(4);
	$sedan->setJumlahKursi(4);
	$sedan->cetak();
	
	$bemo = new Bemo();
	$bemo->setJumlahRoda(3);
	$bemo->setJumlahKursi(2);
	$bemo->cetak();
	echo PHP_EOL;
?>