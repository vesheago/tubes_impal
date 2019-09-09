<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Tagihan</title>
  <br>
  <br>
</head>
<body>

<div class="container">
  <div class="box">
    <h1 class="text-center">Daftar Tagihan</h1>
    <table class="table table-bordered table-striped" id="mydata">
      <thead>
        <tr>
          <td>ID Tagihan</td>
          <td>Tanggal Tagihan</td>
          <td>Jam Tagihan</td>
          <td>No Antrean</td>
          <td>No Polisi</td>
          <td>Rincian</td>
          <td>Total Harga</td>
          <td>Status</td>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach($data->result_array() as $i):
            $id_tagihan=$i['id_tagihan'];
            $tgl_tagihan=$i['tgl_tagihan'];
            $jam_tagihan=$i['jam_tagihan'];
            $no_antrean=$i['no_antrean'];
            $no_polisi=$i['no_polisi'];
            $rincian=$i['rincian'];
            $total_harga=$i['total_harga'];
            $status=$i['status'];
        ?>
        <tr>
          <td><?php echo $id_tagihan;?></td>
          <td><?php echo $tgl_tagihan;?></td>
          <td><?php echo $jam_tagihan;?></td>
          <td><?php echo $no_antrean;?></td>
          <td><?php echo $no_polisi;?></td>
          <td><?php echo $rincian;?></td>
          <td><?php echo $total_harga;?></td>
          <td><?php echo $status;?></td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('#mydata').DataTable();
	});
</script>
</body>
</html>