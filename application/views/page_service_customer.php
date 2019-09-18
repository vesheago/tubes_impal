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
	<form action="<?php echo base_url() ?>index.php/C_customer/add_keluhan" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>No Polisi</td>
				<td><input type="text" name="no_polisi"></td>
			</tr>
			<tr>
				<td>Jenis Keluhan</td>
				<td>
					<select name ="jk_input" class="dropdown" id="jk_id">
						<option value=""selected>------Pilih Kategori------</option>
						<option value="STARTER">Mobil tidak bisa distarter</option>
						<option value="OLI">Ganti oli mesin atau cairan lainnya</option>
						<option value="REM">Masalah rem dan kaki - kaki</option>
						<option value="MESIN">Masalah mesin</option>
						<option value="AC">Service AC</option>
						<option value="WINDOW">Masalah power window</option>
						<option value="MASALAH">Pengecekan masalah</option>
						<option value="Lain">Lainnya</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Keterangan</td>
				
				<td>
				<textarea rows="5" cols="40%"></textarea>
				</td>
			</tr>
            <tr>
				<td>Jam</td>
				<td><input type="text" name="jam"></td>
			</tr>
            <tr>
				<tr><td>Tanggal</td><td>:</td><td><input name="tgl_lhr">&nbsp;<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.formbiodata.tgl_lhr);return false;" ><img name="popcal" align="absmiddle" src="calender/calbtn.gif" width="34" height="22" border="0" alt=""></a></td></tr>
				<iframe width=174 height=189 name="gToday:normal:agenda.js" id="gToday:normal:agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
				</iframe>
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