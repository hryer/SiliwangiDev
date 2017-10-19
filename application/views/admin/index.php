<?php 
  if(!$this->session->has_userdata('username')){
    redirect(base_url() . "AdminLogin");
  }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMS SiliwangiDev</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/admin-style.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SiliwangiDev CMS</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(); ?>adminMain">Dashboard <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url(); ?>adminMain/message">Messages</a></li>
        <li><a href="<?php echo base_url(); ?>adminProjects">Projects</a></li>
        <li><a href="<?php echo base_url(); ?>adminCategories">Categories</a></li>
        <li><a href="<?php echo base_url(); ?>adminUsers">Users</a></li>
       
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Profile</a></li>
            
          </ul>
        </li>

        <li><a href="login.html">Logout</a></li>
      </ul>

    </div>
  </div>
</nav>

    <section>
      <div class="container">
        <div class="row" >
          <div class="col-md-4">
            <ul class="list-group">
              <li class="list-group-item active"><i class="glyphicon glyphicon-dashboard"> </i>   Dashboard</li>
              <li class="list-group-item"><i class="glyphicon glyphicon-envelope"> </i><span class="badge">14</span> Message</li>
              <li class="list-group-item"><i class="glyphicon glyphicon-file"> </i> Projects</li>
              <li class="list-group-item"><i class="glyphicon glyphicon-folder-open"> </i> Categories</li>
              <li class="list-group-item"><i class="glyphicon glyphicon-user"> </i> User Accounts</li>
            </ul>
          </div>
          <div class="col-md-8">
            <h1 class="page-header text-primary"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h1> 
            <hr>
            <h3 class="text-primary">Lastest Project</h3> 
            <table class="table table-striped">
            <thead>
              <tr class="text-info">
                <th>Project Title</th>
                <th>Category</th>
                <th>Author</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($projects_data as $rows){ ?>
                <tr>
                  <td><a href="#"><?php echo $rows['title']; ?></a></td>
                  <td><?php echo $rows['category']; ?></td>
                  <td><?php echo $rows['author']; ?></td>
                  <td><?php echo $rows['description']; ?></td>
                </tr>
              <?php } ?>
            </tbody>

            </table>
            <a href="pages.html" class="btn btn-default">View All Projects</a>
            <hr>
            
            <h3 class="text-primary">Lastest Users</h3>

            <table class="table table-striped">
            <thead>
              <tr class="text-info">
                <th>Name</th>
                <th>Username </th>
                <th>Group</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($admins_data as $rows){ ?>
               <tr>
                <td><a href="#"><?php echo $rows['name']; ?></a></td>
                <td><?php echo $rows['username']; ?></td>
                <td><?php echo $rows['role']; ?></td>
              </tr>
            <?php } ?>
            </tbody>
            </table>

            <a href="users.html" class="btn btn-default">View All Users</a>
          </div>
        </div>
      </div>

    </section>

    <footer>
      <p>Copyright 2017, All Right Reserved.</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
  </body>
</html>
