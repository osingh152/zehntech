<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  </head>
  <body>
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url() ?>">My Restaurant</a>
    </div>
    <ul class="nav navbar-nav">
      
      <li><a href="<?php echo base_url('index.php/customer/start') ?>">Customer Section</a></li>
      <li><a href="<?php echo base_url('index.php/manager') ?>">Manager Section</a></li>
      
    </ul>
  </div>
</nav>
     <?php $this->load->view($_view); ?>
  </body>
</html>