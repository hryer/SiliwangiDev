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
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/admin-style.css" rel="stylesheet">
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
        <li><a href="<?php echo base_url(); ?>adminMain">Dashboard <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url(); ?>adminMain/message">Messages</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>adminProject">Projects</a></li>
        <li><a href="<?php echo base_url(); ?>adminCategories">Categories</a></li>
        <li><a href="<?php echo base_url(); ?>adminUsers">Users</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
          <input type="text" class="form-control col-lg-8 search-form" placeholder="Search">
      </form>
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
              <li class="list-group-item"><i class="glyphicon glyphicon-dashboard"> </i>   Dashboard</li>
              <li class="list-group-item"><i class="glyphicon glyphicon-envelope"> </i><span class="badge">14</span> Message</li>
              <li class="list-group-item active"><i class="glyphicon glyphicon-file"> </i> Projects</li>
              <li class="list-group-item"><i class="glyphicon glyphicon-folder-open"> </i> Categories</li>
              <li class="list-group-item"><i class="glyphicon glyphicon-user"> </i> User Accounts</li>
            </ul>
          </div>

          <form method="post" name="frm">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-6">
                <h1 class="page-header text-primary"><i class="glyphicon    glyphicon-file"></i> Projects</h1> 
                </div>
              <div class="col-md-6">
                <div class="btn-group actions" role="group" aria-label="...">
                  <a class="btn btn-default" href="<?php echo base_url(); ?>AdminProject/addProject"><i class="glyphicon    glyphicon-plus"></i> New</a>
                  <a class="btn btn-default" onClick="edit_records();"><i class="glyphicon    glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-default" onClick="delete_records();"><i class="glyphicon    glyphicon-remove"></i> Delete</a>
                </div>
              </div>
            </div>
            <hr>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>adminMain">Dashboard</a></li>
              <li class="active">Projects</li>
            </ol>

            <table id="sort-table" class="table table-striped table-sorter">
              <thead>
              <tr class="text-info">
                <th><input type="checkbox"></th>
                <th>Project Title   <i class="glyphicon    glyphicon-chevron-down"></i>  </th>
                <th>Category <i class="glyphicon glyphicon-chevron-down"></i> </th>
                <th>Author   <i class="glyphicon    glyphicon-chevron-down"></i>  </th>
                <th>Description   <i class="glyphicon    glyphicon-chevron-down"></i>  </th>
                  
              </tr>
              </thead>
              <tbody>
              <?php foreach($projects_data as $rows){ ?>
              <tr>
                <td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $rows['id']; ?>"  ></td>
                <td><a href="page.html"><?php echo $rows['title']; ?></a></td>
                <td><?php echo $rows['category']; ?></td>
                <td><?php echo $rows['author']; ?></td>
                <td><?php if(strlen($rows['description']) > 25){
                   $rdesc = substr($rows['description'],0,25);
                   echo $rdesc; 
                }else{
                  echo $rows['description'];
                }
                ?>
                     </td>
               
              </tr>
              <?php } ?>
               

              </tbody>
            </table>
            </form>

              <nav aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
         
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
    <script src="<?php echo base_url(); ?>js/jquery.tablesorter.min.js"></script>

    <script>
      $(function(){
        $('#sort-table').tablesorter({
          sortList:[[0,0],[1,0]]
        });
      });
    </script>

    <script>
      var $rows = $('table tr');
      $('.search-form').keyup(function(){
        var val = $.trim($(this).val()).replace(/ +/g,' ').toLowerCase();
        $rows.show().filter(function(){
          var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
          return !~text.indexOf(val);
        }).hide();
      });
    </script>

    <script>
      $('document').ready(function(){
        $(".select-all").click(function(){
          $('.chk-box').attr('checked',this.checked)
        });

        $(".chk-box").click(function(){
          if($(".chk-box").length == $(".chk-box:checked").length){
            $(".select-all").attr("checked","checked");
          }else{
            $(".select-all").removeAttr("checked");
          }
        });
      });
    </script>

    <script>
      function edit_records(){
        document.frm.action = "<?php echo base_url(); ?>adminProject/editProject";
        document.frm.submit();
      }

      function delete_records(){
        document.frm.action = "<?php echo base_url(); ?>adminProject/delete_mul";
        document.frm.submit();
      }
    </script>
    
  </body>
</html>
