
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PERTAMINI</title>
  <link rel="icon" type="image/x-icon" href="img/pertamina.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>public/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>public/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>public/adminlte/dist/css/adminlte.min.css">
	
</head>
<body class="hold-transition login-page" style="background-image: url('img/bg.jpeg'); width: 100%; background-repeat: no-repeat;
    background-size: 100% 100%;">

  <div class="login-box">
    <div class="card">
    <div class="login-logo">
      <a href="#"><img src="img/pertamina.png" width="75px;" alt="" /></a>
    </div>
      <div class="card-body login-card-body">
      <H3 class="text-center"> LOGIN </h3>
      <h4 class="text-center">Sistem Informasi Siswa Dan Guru</h4>

      <?php
							echo validation_errors('<div class="alert alert-danger alert-dismissible">','</div>');
							if ($this->session->flashdata('danger'))
							{
								echo '<div class="alert alert-danger alert-dismissible " role="alert">';
								echo $this->session->flashdata('danger');
								echo '</div>';
							}
							if ($this->session->flashdata('error'))
							{
								echo '<div class="alert alert-danger alert-dismissible " role="alert">';
								echo $this->session->flashdata('error');
								echo '</div>';
							}
							?>

        <form  action="<?= base_url()?>login/login" method="post">
          <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <p class="mb-0">
            <button type="submit" name="kirim" class="btn btn-primary btn-block text-center">Masuk</button>
          </p>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->


<!-- jQuery -->
<script src="<?= base_url() ?>public/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>public/adminlte/dist/js/adminlte.min.js"></script>

<script type="text/javascript">
    $(".alert-slide-up").alert().delay(2000).slideUp('slow');
</script>

</script>
</body>
</html>
