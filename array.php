<?php 

	// membuat variabel $data_trainer dengan tipe data array dan memasukan beberapa data nama trainer

	$data_trainer = $array = array('Lidia', 'Wanny', 'Elon', 'Kezia');

	echo "<h3>Trainer";

	foreach ($data_trainer as $trainer)  {
		echo "Trainer : " . $trainer . "<br>";
	};

	/* $peserta_kursus merupakan variabel tipe data array di dalamnya ada dalam peserta khusus*/

	$peserta_kursus = ['Lidia', 'Wanny', 'Elon', 'Kezia'];

	echo "<h3>Siswa</h3>"; // buat judul 

	echo $peserta_kursus[0];
	echo "<br>"; // membuat baris baru dengan HTML

	echo $peserta_kursus[1];
	echo "<br>"; // membuat baris baru dengan HTML

	echo $peserta_kursus[2];
	echo "<br>"; // membuat baris baru dengan HTML

	echo $peserta_kursus[3];
	echo "<br>"; // membuat baris baru dengan HTML
	

 ?>