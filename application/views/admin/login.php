
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/admin-style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/signin.css"> -->
    <style>
      .hide{
    color:#FF0000;
  }

  </style>
  </head>

  <body id="signin">
    
    <div class="container">

      <form class="form-signin" action="<?php echo base_url();?>adminLogin/loginSubmit" method="post">
        <h2 class="form-signin-heading text-center">CMS SiliwangiDev</h2>
        <label for="inputEmail" class="sr-only" >Email address</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="id" required autofocus name="username">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="pass">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <a class="button hide" href=""><?php echo validation_errors(); ?>
          <?php if(isset($loginerror)){ ?> <?php echo $loginerror; ?> <?php } ?></a>
      </form>

    </div> <!-- /container -->

    <section>

    </section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
  </body>
</html>
