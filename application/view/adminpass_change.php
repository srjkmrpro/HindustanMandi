<?php
include("../../config.php");
$call_config=new config();
if (isset($_GET['otp'])) {
$otp=mysqli_escape_string($call_config->con,$_GET['otp']);
	?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Login Your Account</title>
  <link rel="canonical" href="" />
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta itemprop="name" content="">
  <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta itemprop="image" content="<?= $call_config->base_url();?>s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
  <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="<?= $call_config->base_url();?>s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="">
  <meta property="og:title" content="" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="<?= $call_config->base_url();?>s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg" />
  <meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4." />
  <meta property="og:site_name" content="Creative Tim" />
  <!-- Favicon -->
  <link rel="icon" href="<?= $call_config->base_url();?>app-assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= $call_config->base_url();?>app-assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= $call_config->base_url();?>app-assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= $call_config->base_url();?>app-assets/css/argon.min5438.css?v=1.2.0" type="text/css">
  <!-- Google Tag Manager -->
  <!-- End Google Tag Manager -->
</head>

<body class="bg-default">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-6 py-lg-6 pt-lg-6">
      <div class="container">
        <div class="header-body text-center mb-5">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Welcome!</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-2"><small>Admin Change Password</small></div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form method="POST" action="<?php echo $call_config->base_url() ?>application/modal/admin/changepass_f.php">
                <div class="form-group mb-2">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input type="hidden" name="otp" value="<?php echo $otp ?>">
                    <input class="form-control" placeholder="New Password" type="text" name="_password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Re-Enter Password" name="_rpassword" type="password">
                  </div>
                  <input type="hidden" name="_key" value="1">
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary my-4">Change Password</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Core -->
  <script src="<?= $call_config->base_url();?>app-assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= $call_config->base_url();?>app-assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= $call_config->base_url();?>app-assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= $call_config->base_url();?>app-assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= $call_config->base_url();?>app-assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="<?= $call_config->base_url();?>app-assets/js/argon.min5438.js?v=1.2.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="<?= $call_config->base_url();?>app-assets/js/demo.min.js"></script>
</body>


<!-- Mirrored from demos.creative-tim.com/argon-dashboard-pro/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 09:30:30 GMT -->
</html>
	<?php
}
else
{
$call_config->msg("Failed!!","Invalid Link","error","","");		
}

?>