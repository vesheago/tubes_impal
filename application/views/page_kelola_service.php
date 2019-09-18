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
        <div class="form-group">
            <label class="control-label col-xs-3" >ID Tagihan</label>
                <div class="col-xs-8">
                    <input name="id_tagihan" value="<?php echo $id_tagihan;?>" class="form-control" type="text" placeholder="ID Tagihan..." readonly>
                </div>
        </div>
        <form class="form-horizontal" method="post" action="<?php echo base_url().'c_admin/kelolaService'?>">
            <div class="form-group">
                <label class="control-label col-xs-3" >Service Umum</label>
                    <div class="col-xs-8">
                        <input type="checkbox" name="service[]" value="720000">Ganti Aki
                        <input type="checkbox" name="service[]" value="860000">Ganti Oli Mesin
                    </div>
            </div>
        </form>
	</div>
</div>
    <!--END MODAL UPDATE TAGIHAN-->

<script>
	$(document).ready(function(){
		$('#mydata').DataTable();
	});
</script>
</body>
</html>