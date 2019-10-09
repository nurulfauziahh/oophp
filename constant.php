<?php 
	
	define('NAMA', 'Sandhika Galih');
	echo NAMA;

	echo "<br>";

	const UMUR = 32;
	echo UMUR;



	Class Coba{
		const NAMA = 'Sandhika';

	}

	echo Coba::NAMA;

	echo __FILE__;

	function coba(){
		return __FUNCTION__;

	}

	echo coba();