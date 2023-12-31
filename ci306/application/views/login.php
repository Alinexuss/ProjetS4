<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/loginStyle.css">

    <title>Log in</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('<?php echo base_url(); ?>assets/img/photo-1587996597484-04743eeb56b4.jfif'); width: 500px; height: auto;" ></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <a href="inscription">Sign up</a>
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>Foodsport</strong></h3>
            <form action="Login/checkUser" method="post">
              <?php if(isset($error)) { ?>
              <p><?php echo $error ?></p>
              <?php } ?>
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="text" class="form-control" placeholder="your mail@gmail.com" id="email" name="email">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password" name="password">
              </div>
              <div class="d-flex mb-5 align-items-center">
                <p><input type="hidden" name="typeUtilisateur" value="0"></p>
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  </body>
</html>