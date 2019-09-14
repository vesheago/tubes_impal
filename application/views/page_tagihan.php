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
          <th>Jam Tagihan</th>
          <th>No Antrean</th>
          <th>No Polisi</th>
          <th>Rincian</th>
          <th>Total Harga</th>
          <th>Status</th>
          <th>Update</th>
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
          <td><?php echo 'Rp '.number_format($total_harga);?></td>
          <td><?php echo $status;?></td>
          <!--BUTTON UPDATE TAGIHAN -->
          <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_edit<?php echo $id_tagihan;?>"><i class="fas fa-user-edit"></i></button></td>
          <!-- <td><a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal_edit<?php echo $id_tagihan;?>"> Edit</a></td> -->
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
	</div>
</div>

<!-- ============ MODAL UPDATE TAGIHAN =============== -->
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
        <div class="modal fade" id="modal_edit<?php echo $id_tagihan;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Update Tagihan</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url()?>index.php/C_admin/updateTagihan">
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
                        <label class="control-label col-xs-3" >Jam</label>
                        <div class="col-xs-8">
                            <input name="jam_tagihan" value="<?php echo $jam_tagihan;?>" class="form-control" type="text" placeholder="Jam..." readonly>
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
                             <select name="status" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <?php if($status=='Lunas'):?>
                                    <option value="Lunas" selected>Lunas</option>
                                    <option value="Belum Lunas">Belum Lunas</option>
                                <?php else:?>
                                    <option value="Lunas">Lunas</option>
                                    <option value="Belum Lunas" selected>Belum Lunas</option>
                                <?php endif;?>
                             </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    <?php endforeach;?>
    <!--END MODAL UPDATE TAGIHAN-->

<script>
	$(document).ready(function(){
		$('#mydata').DataTable();
	});
</script>
</body>
</html>