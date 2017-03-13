<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Exam seating arrangement
</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/classwisepages.css"/>
</head>
<body>
  <nav class="navbar  navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right nave-pills">
          <li class="dropdown ">
            <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user white"></span><span class="caret"></span></a>
            <ul class="dropdown-menu ">
              <li  ><a href="profile.php" class="glyphicon glyphicon-user"> Profile</a></li>
              <li><a href="setting.php" class="glyphicon glyphicon-cog"> Setting</a></li>
              <li><a href="clear.php" class="glyphicon glyphicon-trash"> ClearDB</a></li>
              <li><a href="firstpage.php" class="glyphicon glyphicon-off"> Signout</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="container ">
    <div class="row">
      <div class="col-xs-4 col-xs-push-4" style="background-color: #ffffff;">
          <div class="panel panel-default">
            <div class="panel-body">
            <form class="form-horizontal content"role="form">
             <div class="form-group">
                <label for="name">Branch Name</label>
                  
                  <select class="form-control">
                    <option>Computer (6)</option>
                    <optioN>Mechanical (1)</option>
                    <option>IT (7)</option>
                    <option>Civil (8)</option>
                    <option>Electrical (2)</option>
                    <option>Extc (3)</option>
                    <option>Chemical (4)</option>
                    <option>Petrochemical (5)</option>
               </select>
            </div>
            <div class="form-group">
                <label for="name">Year</label>

                  <select class="form-control">
                    <option>First</option>
                    <optioN>Second</option>
                    <option>Third</option>
                    <option>Fourth</option>
               </select>
            </div>
            <div class="form-group">
              <center><a href="datainsert.php" type="button" name="submit" class="btn btn-default">Submit</a>&nbsp&nbsp<a href="adminbranchyear,php" type="button" name="cancel" class="btn btn-default">cancel</a></center>
</div>
          </form>

    </div>
    </div>
   </div>
   </div>
 </div>
  <!-- jQuery  -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
