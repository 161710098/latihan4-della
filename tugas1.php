<?php 
echo '<center>';
	require_once 'tugas.php';

	$identitas1 = new identitas ('ayi', 'wiraswasta', 'babakan nugraha');
	
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';
	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "pekerjaan = ".$identitas1->get_pekerjaan().'<br>';
	echo "alamat = ".$identitas1->get_alamat().'<br>'
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';

	$identitas1 = new identitas ('setiani', 'ibu rumah tangga', 'rancamanyar');
	
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';
	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "pekerjaan = ".$identitas1->get_pekerjaan().'<br>';
	echo "alamat = ".$identitas1->get_alamat().'<br>'
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';

	$identitas1 = new identitas ('dina', 'swasta', 'tci');
	
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';
	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "pekerjaan = ".$identitas1->get_pekerjaan().'<br>';
	echo "alamat = ".$identitas1->get_alamat().'<br>'
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';



	
?>