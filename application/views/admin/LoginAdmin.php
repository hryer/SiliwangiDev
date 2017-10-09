<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
 

  <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
  
  <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery/jquery.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  
  <style>
      .hide{
    color:#FF0000;
  }

  </style>
</head>

<body>
<div class="container" style="margin-top: 5%;">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
            
            <!-- Login Form -->
            <form role="form" action="<?php echo base_url();?>adminLogin/loginSubmit" method="post">
            
            <!-- Username Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                    <label for="username"><span class="text-danger" style="margin-right:5px;">*</span>Username:</label>
                        <div class="input-group">
                            <input class="form-control" id="username" type="text" name="username" placeholder="Username" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
                            </span>
                            
                        </div>
                        
                    </div>
                </div>
                
                <!-- Content Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="password"><span class="text-danger" style="margin-right:5px;">*</span>Password:</label>
                        <div class="input-group">
                            <input class="form-control" id="password" type="password" name="pass" placeholder="Password" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                            
                            </span>
                        </div>
                    </div>
                </div>
                
                <!-- Login Button -->
                <div class="row">
                    <div class="form-group col-md-4 col-xs-4">
                        <button class="btn btn-primary" type="submit" value="submit">Submit</button>
                    </div>
                    
                     <div class="form-group col-md-4 col-xs-4">
                        <button class="btn btn-danger" type="button" value="reset">Reset</button>
                    </div>
                    
                     <div class="form-group col-md-4 col-xs-4">
                        <button class="btn btn-success" type="button">Register</button>
                    </div>
                </div>
                
            </form>
            <!-- End of Login Form -->
            <a class="button hide" href=""><?php echo validation_errors(); ?>
          <?php if(isset($loginerror)){ ?> <?php echo $loginerror; ?> <?php } ?></a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
