<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['Cetak'])){
	$id = $_POST['lahir'];
	}

	$tanggal = date("m/y");
	$tgl = date("d/m/y");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK SURAT</title>
</head>

<body>
	<center>

		<h2>PEMERINTAH KABUPATEN CIANJUR</h2>
		<h3>KECAMATAN CIANJUR 
			<br>DESA CIRANJANG</h3>
		<p>________________________________________________________________________</p>

		<?php
			$sql_tampil = "select * from tb_lahir where id_lahir='$id'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>SURAT KETARANGAN KELAHIRAN</u>
		</h4>
		<h4>No Surat :
			<?php echo $data['id_lahir']; ?>/Ket.Kelahiran/
			<?php echo $tanggal; ?>
		</h4>
	</center>
	<p>Yang bertandatangan dibawah ini Kepala Desa Ciranjang, Kecamatan Ciranjang, Kabupaten Cianjur, dengan ini menerangkan
		bahawa :</P>
	<table>
		<tbody>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<?php echo $data['jekel']; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td>
					<?php echo $data['tgl_lh']; ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<p>Telah benar-benar Lahir di Desa Ciranjang, Kecamatan Ciranjang, Kabupuaten Cianjur</P>
	<p>Demikian Surat ini dibuat, agar dapat digunakan sebagaimana mestinya.</P
	<br>
	<br>
	<br>
	<br>
	<br>
	<p align="right">
		Cianjur,
		<?php echo $tgl; ?>
		<br> KEPALA DESA CIRANJANG
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>(         M AZRIEL            )
	</p>


	<script>
		window.print();
	</script>

</body>

</html>