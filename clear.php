<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Exam Seating arrangement
</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/clear1.css"/>
</head>
<body>
  <?php
  session_start();
  if (isset($_SESSION['adminname']) && isset($_SESSION['password'])) {
    ?>
    <?php
    $server='localhost';
    $dbuser='root';
    $dbpass='alkesha15';
    $db='trial';
    $conn=mysqli_connect($server,$dbuser,$dbpass,$db);
    $password=$_POST['password'];
    $passq="SELECT password from admintable";
    $retvalpass=mysqli_query($conn,$passq);
    $rowpass=mysqli_fetch_assoc($retvalpass);
    $pd=$rowpass['password'];
    $tablename=astable;
    $truncateq="TRUNCATE TABLE $tablename";
    if($password==$pd){
      if(mysqli_query($conn,$truncateq))
      {
        $msg="the seating arrangement data is deleted successfully";
       echo "<script type='text/javascript'>alert('$msg');</script> ";
      }
      else {
        $msg="operation is failed";
       echo "<script type='text/javascript'>alert('$msg');</script> ";
      }

    }?>
  <div class="container vertical-align">
    <div class="row">
      <div class="col-xs-4 col-xs-push-4" style="background-color: #ffffff;">
        <div class="panel panel-default">
            <div class="panel-body">
            <form class="form-horizontal  content" action="clear.php" method="post" role="form">
             <div class="form-group">
              <p><h3>Do you really want to clear all seating arrangement ?</h3></p>
                <h4>All exam arrangement data is clear after clicking on clear button</h4>
                <p>Enter your admin password to clear a data</p>
                <label>Password :</label><input type="password" name="password"></input>
            </div>

<center><input type="submit" name="clear" value="clear"class="btn btn-warning"></input>
</center>
</form>

</div>
</div>
</div>
</div>
</div>
<?php }
else{
  $msg="you have not login!";
  echo "<script type='text/javascript'>alert('$msg');</script>";
} ?>
</body>
</html>
