<?php 


//Jualan produk
//komik
//game

class Produk {

	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit ="penerbit",
		   $harga = 0;


		   public function __construct($judul, $penulis, $penerbit, $harga) {

		   		$this->judul = $judul;
		   		$this->penulis = $penulis;
		   		$this->penerbit = $penerbit;
		   		$this->harga = $harga;

		   }

		   public function getLabel() {



		   	return "$this->penulis, $this->penerbit";
		   }
}


// $produk1 = new Produk();
// $produk1->judul ="Naruto";
// var_dump($produk1);


// $produk2 = new Produk();
// $produk2->judul ="Uncharted";
// $produk2->tambahProperty = "hahahah";
// var_dump($produk2);


$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 3000;


echo "<br>";


$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;


echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game :" . $produk4->getLabel();
 
