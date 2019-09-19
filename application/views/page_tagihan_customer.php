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
          <th>ID Tagihan</th>
          <th>Tanggal Tagihan</th>
          <th>Total Harga</th>
          <th>Status</th>
          <th>Lihat</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach($data->result_array() as $i):
            $id_tagihan=$i['id_tagihan'];
            $tgl_tagihan=$i['tgl_tagihan'];
            $total_harga=$i['total_harga'];
            $status=$i['status'];
            $id_customer_FK=$i['id_customer_FK'];
        ?>
        <tr>
          <td><?php echo $id_tagihan;?></td>
          <td><?php echo $tgl_tagihan;?></td>
          <td><?php echo 'Rp '.number_format($total_harga);?></td>
          <td><?php echo $status;?></td>
          <!--BUTTON VIEW TAGIHAN -->
          <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_view<?php echo $id_customer_FK;?>"><i class="fas fa-eye"></i></button></td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
	</div>
</div>

<!-- ============ MODAL VIEW TAGIHAN =============== -->
<?php 
        foreach($data->result_array() as $i):
          $id_tagihan=$i['id_tagihan'];
          $tgl_tagihan=$i['tgl_tagihan'];
          $no_antrean=$i['no_antrean'];
          $no_polisi=$i['no_polisi'];
          $rincian=$i['rincian'];
          $total_harga=$i['total_harga'];
          $status=$i['status'];
        ?>
        <div class="modal fade" id="modal_view<?php echo $id_customer_FK;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Tagihan</h3>
            </div>
            <form class="form-horizontal" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Tagihan</label>
                        <div class="col-xs-8">
                            <input name="id_tagihan" value="<?php echo $id_tagihan;?>" class="form-control" type="text" placeholder="ID Tagihan..." readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal</label>
                        <div class="col-xs-8">
                            <input name="tgl_tagihan" value="<?php echo $tgl_tagihan;?>" class="form-control" type="text" placeholder="Tanggal..." readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Polisi</label>
                        <div class="col-xs-8">
                            <input name="no_polisi" value="<?php echo $no_polisi;?>" class="form-control" type="text" placeholder="No Polisi..." readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Rincian</label>
                        <div class="col-xs-8">
                            <input name="rincian" value="<?php echo $rincian;?>" class="form-control" type="text" placeholder="Rincian..." readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Total Harga</label>
                        <div class="col-xs-8">
                            <input name="total_harga" value="<?php echo $total_harga;?>" class="form-control" type="text" placeholder="Total Harga..." readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-8">
                            <input name="total_harga" value="<?php echo $status;?>" class="form-control" type="text" placeholder="Status..." readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <?php endforeach;?>
    <!--END MODAL VIEW TAGIHAN-->

<script>
	$(document).ready(function(){
		$('#mydata').DataTable();
	});
</script>
</body>
</html>