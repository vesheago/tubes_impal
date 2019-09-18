<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Service</title>
  <br>
  <br>
</head>
<body>

<div class="container">
  <div class="box">
    <h1 class="text-center">Form Keluhan</h1>
	<form action="<?php echo base_url().'c_customer/add_keluhan'?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>No Polisi</td>
				<td><input type="text" name="no_polisi"></td>
			</tr>
			<tr>
				<td>No</td>
				<td><input type="text" name="no_polisi"></td>
			</tr>
			<tr>
				<td>Jenis Keluhan</td>
				<td><input type="text" name="jenis_keluhan"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
            <tr>
				<td>Jam</td>
				<td><input type="text" name="jam"></td>
			</tr>
            <tr>
				<td>Tanggal</td>
				<td><input type="text" name="tanggal"></td>
			</tr>
            <tr>
				<td>No Antrean</td>
				<td><input type="text" name="no_antrean"></td>
			</tr>
            <tr>
				<td>Id Customer</td>
				<td><input type="text" name="id_customer"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
	</div>
</div>

<script>
	$(document).ready(function(){
		$('#mydata').DataTable();
	});
</script>
</body>
</html>