<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
  </head>
  <body>
    <div class="container" style="margin-top: 50px">
      <br><br><br>
      <h1 class="text-center">Bengkelku</h1>
      <div class="container">
        <div class="row">
          <h2>Welcome back <?php echo $this->session->userdata('ses_nama');?></h2>
        </div>
      </div>
    </div> <!-- /container -->
  </body>
</html>