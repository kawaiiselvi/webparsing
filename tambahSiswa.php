<?php
 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nm = $_POST['nama'];
		$kls = $_POST['kelas'];
		$no = $_POST['no_hp'];
		$almt = $_POST['alamat'];
		$cita = $_POST['cita_cita'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_siswa (nama,kelas,no_hp,alamat,cita_cita) VALUES ('$nm','$kls','$no','$almt','$cita')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Siswa';
		}else{
			echo 'Gagal Menambahkan Siswa';
		}
		
		mysqli_close($con);
	}
?>