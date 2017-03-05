<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datai.css">
  <title>Exam Seating Arrangement</title>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

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

    <!-- Collect the nav links, forms, and other content for toggling -->

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

  <div class="container vertical-align">
    <div class="row">
      <div class="col-xs-4 col-xs-push-4" style="background-color: #ffffff;">
        <div class="heading-control">
        <center><h2>SEATING ARRANGEMENT FILLING<h2></center>
        </div>
          <div class="panel panel-default">
            <div class="panel-body">
            <form class="form-horizontal  content" role="form">
             <div class="form-group">
                <label for="numberstart" class="enroll-control">Enrollment Number :</label>
                  <input type="text" class="form-control " id="number" placeholder="Enter start number">
                  <label for="numberstart "class="to-control">to</label>
                  <input type="text" class="form-control" id="number" placeholder="Enter end number">
            </div>
            <div class="form-group ">
              <label for="SelectSubejct" class="sub-control" >Select Subject :
              </label>
                  <select class="form-control">
                    <option>1</option>
                    <optioN>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="SelectClass" class=" class-control">Select classroom :</label>

                          <select class="form-control">
                            <option>LH001</option>
                            <optioN>LH002</option>
                            <option>LH003</option>
                            <option>LH004</option>
                            <option>LH005</option>
                            <option>LH006</option>
                            <option>LH101</option>
                            <option>LH102</option>
                            <option>LH103</option>
                            <option>LH104</option>
                            <option>LH105</option>
                            <option>LH106</option>
                            <option>LH201</option>
                            <option>LH202</option>
                            <option>LH203</option>
                            <option>LH204</option>
                            <option>LH205</option>
                            <option>LH206</option>
                            <option>LH207</option>
                            <option>LH208</option>
                            <option>LH210</option>
                              </select>
                            </div>
                            <div class="form-group">

                                <label for="selectClass" class="cl-control">Class :</label>
                                <input type="text" class="form-control " id="number" placeholder="Enter start number">
                              </div>
<center><a type="button" href="" class="btn btn-default"><b>insert<b></a>&nbsp&nbsp
<a type="button" href="datainsert.php" class="btn btn-default"><b>cancel<b></a></center>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
