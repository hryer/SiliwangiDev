
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
    <link href="css/style.css" rel="stylesheet">
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
        <li><a href="index.html">Dashboard <span class="sr-only">(current)</span></a></li>
        <li><a href="messages.html">Messages</a></li>
        <li><a href="pages.html">Projects</a></li>
        <li class="active"><a href="catagories.html">Categories</a></li>
        <li><a href="users.html">Users</a></li>
       
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
              <li class="list-group-item"><i class="glyphicon glyphicon-file"> </i> Projects</li>
              <li class="list-group-item active"><i class="glyphicon glyphicon-folder-open"> </i> Categories</li>
              <li class="list-group-item"><i class="glyphicon glyphicon-user"> </i> User Accounts</li>
            </ul>
          </div>
          <div class="col-md-8">

            <div class="row">
              <div class="col-md-6">
                  <h1 class="page-header text-primary"><i class="glyphicon glyphicon-folder-open"></i> &nbsp;Categories</h1>  
                </div>
              <div class="col-md-6">
                <div class="btn-group actions" role="group" aria-label="...">
                  <a class="btn btn-default" href="#"><i class="glyphicon    glyphicon-plus"></i> New</a>
                  <a class="btn btn-default" href="#"><i class="glyphicon    glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-default" href="#"><i class="glyphicon    glyphicon-remove"></i> Delete</a>
                </div>
              </div>
            </div>
            <hr>
            <ol class="breadcrumb">
              <li><a href="index.html">Dashboard</a></li>
              <li class="active">Categories</li>
            </ol>
            
           
            <table id="sort-table" class="table table-striped table-sorter">
            <thead>
              <tr class="text-info">
                <th><input type="checkbox"></th>
                <th>Category Title   <i class="glyphicon    glyphicon-chevron-down"></i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox"></td>
                <td><a href="category.html">Web Design</a></td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td><a href="category.html">Web Design</a></td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td><a href="category.html">Web Programming</a></td>
              </tr>
              <tr>
              <td><input type="checkbox"></td>
                
                  <td><a href="category.html">Dekstop Programming</a></td>
                
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td><a href="#">SEO</a></td>
              </tr>

            </tbody>
            </table>

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
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.tablesorter.min.js"></script>

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
  </body>
</html>
