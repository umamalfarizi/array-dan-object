<?php

$perabotan = (object)[
	'nama' => 'Meja',
	'material' => [
		'ringan' => 'Plastik',
		'kuat' => 'Kayu'
		],
	'ukuran' => [
		'kecil' => '60cm x 50cm',
		'sedang' => '80cm x 60cm',
		'besar' => '100cm x 70cm'
		],
	'tinggi' => '70cm',
	'harga' => [
		'ringan' => [
			'kecil' => 'Rp 20.000,-',
			'sedang' => 'Rp 25.000,-',
			'besar' => 'Rp 30.000,-'
			],
		'kuat' => [
			'kecil' => 'Rp 25.000,-',
			'sedang' => 'Rp 32.000,-',
			'besar' => 'Rp 40.000,-'
			]
		]
	];
	
	//mengonversi data array menjadi object
	$perabotan->material = (object)$perabotan->material;
	$perabotan->ukuran = (object)$perabotan->ukuran;
	$perabotan->harga = (object)$perabotan->harga;
	$perabotan->harga->ringan = (object)$perabotan->harga->ringan;
	$perabotan->harga->kuat = (object)$perabotan->harga->kuat;
	
	//melihat object multidimensi
	echo "<pre>";
	print_r($perabotan);
	echo "<pre>";
	
	//sebenarnya ada cara untuk mengonversi data array ke menjadi object dengan menambahkan "[objet]" pada nilai array yang akan dirubah.

?>