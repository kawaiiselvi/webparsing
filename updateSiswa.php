<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 
		$id = $_POST['id'];
		$nm = $_POST['nama'];
		$kls = $_POST['kelas'];
		$no = $_POST['no_hp'];
		$almt = $_POST['alamat'];
		$cita = $_POST['cita_cita'];
		
		//import file koneksi database 
		require_once('koneksi.php');
		
		//Membuat SQL Query
		$sql = "UPDATE tb_siswa SET nama = '$nm', kelas = '$kls', no_hp = '$no', alamat = '$almt', cita_cita = '$cita' WHERE id = $id;";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data Siswa';
		}else{
			echo 'Gagal Update Data Siswa';
		}
		
		mysqli_close($con);
	}
?>