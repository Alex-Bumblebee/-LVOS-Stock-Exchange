<?php 
require_once("pass/database2.php");

$requete_pseudo = $bdd->prepare("SELECT * FROM stock_exchange INNER JOIN resources ON stock_exchange.resource_id = resources.resources_id");
$requete_pseudo->execute();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Stock Exchange | Los Vanilla OS </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php
    require_once("include/header.php");
    require_once("include/menu.php");
  ?>
  <div class="content-wrapper">
    <center>
      <img src="LosVanilla.png" alt="Logo" width="10%" height="10%" align="center">
      <h3>The Los Vanilla OS Stock Exchange</h3>
      <hr>
    </center>
    <section class="content">
      <div class="row">
        <?php while ($data = $requete_pseudo->fetch()) { 
              if ($data['price_current'] > $data['price_previous']) {
                $color = 'green';
                $icon = 'ion-arrow-up-c';
              }
              if ($data['price_current'] < $data['price_previous']) {
                $color = 'red';
                $icon = 'ion-arrow-down-c';
              }
              if ($data['price_current'] == $data['price_previous']) {
                $color = 'blue';
                $icon = 'ion-arrow-right-c';
              }
        ?>
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-<?= $color ?>">
            <div class="inner">
              <h3><?php echo $data['price_current']; ?> $</h3>
              <p><?php echo $data['resources_name']; ?></p>
            </div>
            <div class="icon">
              <i class="ion <?= $icon ?>"></i>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </section>
  </div>
  <?php 
    require_once("include/footer.php");
    require_once("include/aside.php");
  ?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
