<?php 


//Jualan produk
//komik
//game

class Produk {

	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;


		   public function __construct($judul ="judul", $penulis ="penulis", $penerbit = "penerbit", $harga = 0) {

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


$produk3 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000);


echo "<br>";


$produk4 = new Produk("Uncharted","Neil Druckman","Sony COmputer", 250000);



echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game :" . $produk4->getLabel();
 
