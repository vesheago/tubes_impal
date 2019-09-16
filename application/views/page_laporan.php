<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="M Fikri Setiadi">

    <title>Laporan</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/css/4-col-portfolio.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-datetimepicker.min.css'?>">
    <link href="<?php echo base_url().'assets/dist/css/bootstrap-select.css'?>" rel="stylesheet">
</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="box">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data
                        <small>Laporan</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->
            <!-- Projects Row -->
            <div class="row">
                <div class="col-lg-12">
                <table class="table table-bordered table-condensed" style="font-size:12px;" id="mydata">
                    <thead>
                        <tr>
                            <th style="text-align:center;width:40px;">No</th>
                            <th>Laporan</th>
                            <th style="width:100px;text-align:center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:center;vertical-align:middle">1</td>
                            <td style="vertical-align:middle;">Laporan Data Service</td>
                            <td style="text-align:center;">
                                <a class="btn btn-sm btn-default" href="<?php echo base_url()?>index.php/C_manajer/lap_data_service" target="_blank"><span class="fa fa-print"></span> Print</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p style="text-align:center;">Copyright &copy; <?php echo '2019';?> by PT Bengkelku</p>
                    </div>
                </div>
                <!-- /.row -->
            </footer>
        </div>
        <!-- /.box -->
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/dist/js/bootstrap-select.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/moment.js')?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydata').DataTable();
        } );
    </script>
</body>

</html>