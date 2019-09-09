<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Tagihan</title>
  <br>
  <br>
	<!-- <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet"> -->
    <!-- <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet"> -->
</head>
<body>

<div class="container">
  <div class="box">
    <h1 class="text-center">Daftar Tagihan</h1>
    <table class="table table-bordered table-striped" id="mydata">
      <thead>
        <tr>
          <td>ID Tagihan</td>
          <td>Tanggal</td>
          <td>Jam</td>
          <td>Total</td>
          <td>Status</td>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach($data->result_array() as $i):
            $id_tagihan=$i['id_tagihan'];
            $tgl_tagihan=$i['tgl_tagihan'];
            $jam_tagihan=$i['jam_tagihan'];
            $total=$i['total'];
            $status=$i['status'];
        ?>
        <tr>
          <td><?php echo $id_tagihan;?></td>
          <td><?php echo $tgl_tagihan;?></td>
          <td><?php echo $jam_tagihan;?></td>
          <td><?php echo $total;?></td>
          <td><?php echo $status;?></td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
	</div>
</div>

<!-- <script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"></script> -->
<script>
	$(document).ready(function(){
		$('#mydata').DataTable();
	});
</script>
</body>
</html>