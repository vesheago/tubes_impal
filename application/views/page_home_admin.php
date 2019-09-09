<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
  </head>
  <body>
    <div class="container">
      <!-- <?php $this->load->view('menu');?> Include menu -->
      <div class="container">
        <div class="row">
          <h2>Welcome back <?php echo $this->session->userdata('ses_nama');?></h2>
        </div>
      </div>
    </div> <!-- /container -->
  </body>
</html>
